<?php

namespace Gstay\hotelBundle\Controller;

use Gstay\hotelBundle\Entity\promoHotel;
use Gstay\hotelBundle\Form\promoHotelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class promoHotelController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    /**
     * @Route("/promo_list",name="promo_list")
     */
    public function hotel_listAction()
    {
        $em=$this->getDoctrine()->getManager();
        $promoHotel=$em->getRepository("GstayhotelBundle:promoHotel")->findAll();
        return $this->render('GstayhotelBundle:pages:hotel_offer_list.html.twig',array("promoHotel"=>$promoHotel));
    }

    /**
     * @Route("/promo_hotel",name="promo_hotel")
     */
    public function profile_promoAction () {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();

        $promoHotel = new promoHotel();
        $em=$this->getDoctrine()->getManager();
        $Hotel = $em->getRepository('GstayhotelBundle:Hotel')->findOneBy(array('id_user' => $id ));

        $promoHotel = $em->getRepository('GstayhotelBundle:promoHotel')->findAll();



        return $this->render('GstayhotelBundle:pages:hotel_profile_offer_list.html.twig',array(
            'promoHotel'=>$promoHotel,
            'Hotel'=>$Hotel,
            'msg'=>"Edit successful"


        ));
    }

    /**
     * @Route("/add_promo",name="add_promo")
     */
    public function addPromoAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();

        $promoHotel = new promoHotel();
        $em=$this->getDoctrine()->getManager();
        $Hotel = $em->getRepository('GstayhotelBundle:Hotel')->findOneBy(array('id_user' => $id ));


        $form = $this->createForm(promoHotelType::class,$promoHotel );


        $form->handleRequest($request);

        if($form->isSubmitted() ) {
            $promoHotel->setIdHotel($user);
            $em->persist($promoHotel);
            $em->flush();
            return $this->redirect($this->generateUrl('add_promo',array('msg'=>"add successful")));
        }
        return $this->render('GstayhotelBundle:pages:add_promo.html.twig',array(
            'form'=>$form->createView(),
            'Hotel'=>$Hotel,



        ));




    }


    /**
     * @Route("/edit_promo/{name}",name="edit_promo")
     */
    public function editPromoAction(Request $request,$name)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();


        $em=$this->getDoctrine()->getManager();
        $Hotel = $em->getRepository('GstayhotelBundle:Hotel')->findOneBy(array('id_user' => $id ));

        $promoHotel = $em->getRepository('GstayhotelBundle:promoHotel')->findOneBy(array('name' => $name ));
        $form = $this->createForm(promoHotelType::class,$promoHotel );


        $form->handleRequest($request);

        if($form->isSubmitted() ) {

            $em->persist($promoHotel);
            $em->flush();
            return $this->redirect($this->generateUrl('promo_hotel',array('msg'=>"Edit successful")));
        }
        return $this->render('GstayhotelBundle:pages:edit_promo.html.twig',array(
            'form'=>$form->createView(),
            'Hotel'=>$Hotel,



        ));




    }

    /**
     * @Route("/delete_promo/{id}",name="delete_promo")
     */
    public function deletePromoAction($id)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }



        $em=$this->getDoctrine()->getManager();
        $promoHotel = $em->getRepository('GstayhotelBundle:promoHotel')->findOneBy(array('id' => $id ));

        $em->remove($promoHotel);
        $em->flush();

        return $this->redirect($this->generateUrl('promo_hotel',array('msg'=>"Delete successful")));





    }

}
