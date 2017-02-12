<?php
/**
 * Created by PhpStorm.
 * User: Zarkouna
 * Date: 07/02/2017
 * Time: 22:24
 */

namespace Gstay\carBundle\Controller;


use Gstay\carBundle\Form\NavireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gstay\carBundle\Entity\ProfileCroisiere;
use Gstay\carBundle\Entity\Navire;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NavireController extends Controller
{
    /**
     * @Route("/add_ship",name="add_ship")
     */
    public function addShipAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();

        $navire = new Navire();
        $em=$this->getDoctrine()->getManager();
        $ProfileCroisiere = $em->getRepository('GstaycarBundle:ProfileCroisiere')->findOneBy(array('id_user' => $id ));


        $form = $this->createForm(NavireType::class,$navire );


        $form->handleRequest($request);

        if($form->isSubmitted() ) {
            $navire->setIdProfile($ProfileCroisiere);
            $em->persist( $navire);
            $em->flush();
            return $this->redirect($this->generateUrl('show_ship',array('msg'=>"add successful")));
        }

        return $this->render('GstaycarBundle:Ship:add_ship.html.twig',array(
            'form'=>$form->createView(),
            'ProfileCroisiere'=>$ProfileCroisiere,



        ));




    }

    /**
     * @Route("/show_ship",name="show_ship")
     */
    public function profile_show_shipAction () {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();

        $navire = new Navire();
        $em=$this->getDoctrine()->getManager();
        $ProfileCroisiere = $em->getRepository('GstaycarBundle:ProfileCroisiere')->findOneBy(array('id_user' => $id ));

        $navire = $em->getRepository('GstaycarBundle:Navire')->findAll();



        return $this->render('@Gstaycar/Ship/show_ship.html.twig',array(
            'Navire'=>$navire,
            'ProfileCroisiere'=>$ProfileCroisiere,
            'msg'=>"Edit successful"


        ));
    }
    /**
     * @Route("/edit_ship/{nom}",name="edit_ship")
     */
    public function editShipAction(Request $request,$nom)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();


        $em=$this->getDoctrine()->getManager();
        $ProfileCroisiere = $em->getRepository('GstaycarBundle:ProfileCroisiere')->findOneBy(array('id_user' => $id ));

        $ship = $em->getRepository('GstaycarBundle:Navire')->findOneBy(array('nom' => $nom ));
        $form = $this->createForm(NavireType::class,$ship );


        $form->handleRequest($request);

        if($form->isSubmitted() ) {

            $em->persist($ship);
            $em->flush();
            return $this->redirect($this->generateUrl('show_ship',array('msg'=>"Edit successful")));
        }
        return $this->render('@Gstaycar/Ship/edit_ship.html.twig',array(
            'form'=>$form->createView(),
            'ProfileCroisiere'=>$ProfileCroisiere,



        ));




    }

    /**
     * @Route("/delete_ship/{id}",name="delete_ship")
     */
    public function delete_shipAction($id)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }



        $em=$this->getDoctrine()->getManager();
        $navire = $em->getRepository('GstaycarBundle:Navire')->findOneBy(array('id' => $id ));

        $em->remove( $navire);
        $em->flush();

        return $this->redirect($this->generateUrl('show_ship',array('msg'=>"Delete successful")));





    }


}