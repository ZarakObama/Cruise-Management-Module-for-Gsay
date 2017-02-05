<?php
/**
 * Created by PhpStorm.
 * User: HD_EXECUTION
 * Date: 01/02/2017
 * Time: 15:46
 */

namespace Gstay\hotelBundle\Controller;

use Gstay\hotelBundle\Form\HotelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\User;
use Gstay\hotelBundle\Entity\Hotel;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class hotelController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('GstayhotelBundle:Default:index.html.twig');
    }

    /**
     * @Route("/hotel_list",name="hotel_list")
     */
    public function hotel_listAction()
    {
        $em=$this->getDoctrine()->getManager();
        $Hotel=$em->getRepository("GstayhotelBundle:Hotel")->findAll();
        return $this->render('GstayhotelBundle:pages:hotel_list.html.twig',array("Hotel"=>$Hotel));
    }
    /**
     * @Route("/hotel_offer_list",name="hotel_offer_list")
     */
    public function hotel_offer_listAction()
    {
        return $this->render('GstayhotelBundle:pages:hotel_offer_list.html.twig');

    }
    /**
     * @Route("/hotel_profile", name="hotel_profile")
     */
    public function hotel_profileAction()
    {
        $user = $this->getUser();
        $id =  $this->getUser()->getId();
        $email = $this->getUser()->getemail();

        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }

        $em=$this->getDoctrine()->getManager();
        $Hotel = $em->getRepository('GstayhotelBundle:Hotel')->findOneBy(array('id_user' => $id ));
        $newid = $em->getRepository('AppBundle:User')->findOneBy(array('id' => $id ));
        if(empty($Hotel))
        {
            $Hotel= new Hotel();

            $Hotel->setIdUser($newid);
            $Hotel->setDateInscrit(new \DateTime());

            $em->persist($Hotel);
            $em->flush();

            return $this->render('GstayhotelBundle:pages:myProfile.html.twig',array(
                'Hotel'=>$Hotel,
                'email'=>$email
            ));
        }



        return $this->render('GstayhotelBundle:pages:myProfile.html.twig',array(
            'Hotel'=>$Hotel,
            'email'=>$email
        ));
    }

    /**
     * @Route("/hotel_profileSettings", name="hotel_profileSettings")
     */
    public function hotel_profilSettingsAction(Request $request)
    {


        $user = $this->getUser();
        $id =  $this->getUser()->getId();

        $em=$this->getDoctrine()->getManager();
        $Hotel = $em->getRepository('GstayhotelBundle:Hotel')->findOneBy(array('id_user' => $id ));
        $form = $this->createForm(HotelType::class,$Hotel );


        $form->handleRequest($request);

        if($form->isSubmitted() )
        {

            $em->persist($Hotel);
            $em->flush();
            return $this->redirect($this->generateUrl('hotel_profile'));
        }





        /** @var $dispatcher EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory FactoryInterface */
        $formFactory = $this->get('fos_user.change_password.form.factory');

        $form1 = $formFactory->createForm();
        $form1->setData($user);

        $form1->handleRequest($request);

        if ($form1->isSubmitted() && $form1->isValid()) {
            /** @var $userManager UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form1, $request);
            $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        return $this->render('GstayhotelBundle:Hotel:SettingHotelProfile.html.twig',array(
            'form1'=>$form1->createView(),
            'form'=>$form->createView(),
            'Hotel'=>$Hotel

        ));

    }
}