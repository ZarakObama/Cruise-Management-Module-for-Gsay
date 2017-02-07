<?php
/**
 * Created by PhpStorm.
 * User: HD_EXECUTION
 * Date: 01/02/2017
 * Time: 15:55
 */

namespace Gstay\carBundle\Controller;

use Gstay\carBundle\Entity\ProfileCroisiere;
use Gstay\carBundle\Form\ProfileCroisiereType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;

class carController extends Controller
{
    /**
     * @Route("/" )
     */
    public function indexAction()
    {
        return $this->render('GstaycarBundle:Default:index.html.twig');
    }

    /**
     * @Route("/cruiser_profile", name="cruiser_profile")
     */
    public function cruiser_profileAction()
    {
        $user = $this->getUser();
        $id =  $this->getUser()->getId();
        $email = $this->getUser()->getemail();

        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }

        $em=$this->getDoctrine()->getManager();
        $ProfileCroisiere = $em->getRepository('GstaycarBundle:ProfileCroisiere')->findOneBy(array('id_user' => $id ));
        $newid = $em->getRepository('AppBundle:User')->findOneBy(array('id' => $id ));
        if(empty($ProfileCroisiere))
        {
            $ProfileCroisiere= new ProfileCroisiere();

            $ProfileCroisiere->setIdUser($newid);
            $ProfileCroisiere->setDateInscrit(new \DateTime());

            $em->persist($ProfileCroisiere);
            $em->flush();

            return $this->render('GstaycarBundle:profile:myProfile.html.twig',array(
                'ProfileCroisiere'=>$ProfileCroisiere,
                'email'=>$email
            ));
        }



        return $this->render('GstaycarBundle:profile:myProfile.html.twig',array(
            'ProfileCroisiere'=>$ProfileCroisiere,
            'email'=>$email
        ));
    }
    /**
     * @Route("/cruiser_ProfileSettings", name="cruiser_ProfileSettings")
     */
    public function hotel_profilSettingsAction(Request $request)
    {


        $user = $this->getUser();
        $id =  $this->getUser()->getId();

        $em=$this->getDoctrine()->getManager();
        $ProfileCroisiere = $em->getRepository('GstaycarBundle:ProfileCroisiere')->findOneBy(array('id_user' => $id ));
        $form = $this->createForm(ProfileCroisiereType::class,$ProfileCroisiere );


        $form->handleRequest($request);

        if($form->isSubmitted() )
        {

            $em->persist($ProfileCroisiere);
            $em->flush();
            return $this->redirect($this->generateUrl('cruiser_profile'));
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

        return $this->render('GstaycarBundle:profile:SettingProfile.html.twig',array(
            'form1'=>$form1->createView(),
            'form'=>$form->createView(),
            'ProfileCroisiere'=>$ProfileCroisiere

        ));

    }


}

