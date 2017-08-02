<?php
/**
 * Created by PhpStorm.
 * User: HD_EXECUTION
 * Date: 05/02/2017
 * Time: 16:36
 */

namespace Gstay\eventBundle\Controller;


use Gstay\eventBundle\Entity\evenement;
use Gstay\eventBundle\Form\evenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class eventController extends Controller
{

    /**
     * @Route("/showEvents",name="listeventprofile")
     */
    public function listAction()
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();

        $event = new evenement();
        $em=$this->getDoctrine()->getManager();
        $profile = $em->getRepository('GstayeventBundle:profile')->findOneBy(array('id_user' => $id ));

        $event = $em->getRepository('GstayeventBundle:evenement')->findAll();



        return $this->render('GstayeventBundle:profile/event:allevent.html.twig',array(
            'event'=>$event,
            'profile'=>$profile,
            'msg'=>"Edit successful"


        ));

    }

    /**
     * @Route("/addEvent",name="ajoutevent")
     */
    public function addEventAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();

        $event = new evenement();
        $em=$this->getDoctrine()->getManager();
        $profile = $em->getRepository('GstayeventBundle:profile')->findOneBy(array('id_user' => $id ));

        // $evenement = $em->getRepository('GstayeventBundle:evenement')->findOneBy(array('id_user' => $id ));
        $form = $this->createForm(evenementType::class,$event );


        $form->handleRequest($request);

        if($form->isSubmitted() ) {
            $event->setIdOrganisateur($user);
            $em->persist($event);
            $em->flush();
             return $this->redirect($this->generateUrl('listeventprofile',array('msg'=>"add successful")));
        }
        return $this->render('GstayeventBundle:profile/event:addevent.html.twig',array(
            'form'=>$form->createView(),
            'profile'=>$profile,



        ));




    }

    /**
     * @Route("/editEvent/{title}",name="editevent")
     */
    public function editEventAction(Request $request,$title)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();


        $em=$this->getDoctrine()->getManager();
        $profile = $em->getRepository('GstayeventBundle:profile')->findOneBy(array('id_user' => $id ));

         $evenement = $em->getRepository('GstayeventBundle:evenement')->findOneBy(array('titre' => $title ));
        $form = $this->createForm(evenementType::class,$evenement );


        $form->handleRequest($request);

        if($form->isSubmitted() ) {

            $em->persist($evenement);
            $em->flush();
              return $this->redirect($this->generateUrl('listeventprofile',array('msg'=>"Edit successful")));
        }
        return $this->render('GstayeventBundle:profile/event:editevent.html.twig',array(
            'form'=>$form->createView(),
            'profile'=>$profile,



        ));




    }

    /**
     * @Route("/deleteEvent/{id}",name="deleteevent")
     */
    public function deleteEventAction($id)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }



        $em=$this->getDoctrine()->getManager();
        $evenement = $em->getRepository('GstayeventBundle:evenement')->findOneBy(array('id' => $id ));

            $em->remove($evenement);
            $em->flush();

        return $this->redirect($this->generateUrl('listeventprofile',array('msg'=>"Delete successful")));





    }

    /**
     * @Route("/hamdi",name="hamdi")
     */
    public function testAction()
{
    return $this->render('GstayeventBundle:profile/event:testtable.html.twig');

}
}