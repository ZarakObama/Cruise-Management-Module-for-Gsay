<?php
/**
 * Created by PhpStorm.
 * User: HD_EXECUTION
 * Date: 01/02/2017
 * Time: 15:43
 */

namespace Gstay\eventBundle\Controller;
use Gstay\eventBundle\Form\profileType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use AppBundle\Entity\User;
use Gstay\eventBundle\Entity\profile;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class eventController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

       /* $user = $this->getUser();
        $id=0;
        if(!empty($user))
        {
            $id=$this->getUser()->getId();

        }


         $this->render('GstayeventBundle:Default:layout.html.twig',array(
            'id'=>$id
        ));*/

      //  return $this->render('test.html.twig');
    }

    /**
     * @Route("/profile", name="profileEvent")
     */
    public function profileAction()
    {
        $user = $this->getUser();
        $id =  $this->getUser()->getId();
        $email = $this->getUser()->getemail();

        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }

        $em=$this->getDoctrine()->getManager();
        $profile = $em->getRepository('GstayeventBundle:profile')->findOneBy(array('id_user' => $id ));
        $newid = $em->getRepository('AppBundle:User')->findOneBy(array('id' => $id ));
        if(empty($profile))
        {
            $profile= new profile();

            $profile->setIdUser($newid);
            $profile->setDateInscrit(new \DateTime());

            $em->persist($profile);
            $em->flush();

            return $this->render('GstayeventBundle:profile:myProfile.html.twig',array(
                'profile'=>$profile,
                'email'=>$email
            ));
        }



        return $this->render('GstayeventBundle:profile:myProfile.html.twig',array(
            'profile'=>$profile,
            'email'=>$email
        ));
    }

    /**
     * @Route("/profileSetting", name="profileEventSetting")
     */
    public function profilSettingAction(Request $request)
    {


        $user = $this->getUser();
        $id =  $this->getUser()->getId();

        $em=$this->getDoctrine()->getManager();
        $profile = $em->getRepository('GstayeventBundle:profile')->findOneBy(array('id_user' => $id ));
        $form = $this->createForm(profileType::class,$profile );


        $form->handleRequest($request);

        if($form->isSubmitted() )
        {

            $em->persist($profile);
            $em->flush();
            return $this->redirect($this->generateUrl('profileEvent'));
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

        return $this->render('GstayeventBundle:profile:SettingProfile.html.twig',array(
            'form1'=>$form1->createView(),
            'form'=>$form->createView(),
         'profile'=>$profile

        ));

    }
}