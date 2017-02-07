<?php

namespace Gstay\hotelBundle\Controller;
use Gstay\hotelBundle\Entity\facilities;
use Symfony\Component\Routing\Annotation\Route;
use Gstay\hotelBundle\Form\facilitiesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class facilitiesController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }


    /**
     * @Route("/facilities_settings", name="facilities_settings")
     */
    public function hotel_facilitiesSettingsAction(Request $request) {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();

        $facilities = new facilities();
        $em=$this->getDoctrine()->getManager();
        $Hotel = $em->getRepository('GstayhotelBundle:Hotel')->findOneBy(array('id_user' => $id ));

        $felecity = $em->getRepository('GstayhotelBundle:facilities')->findBy(array('id_hotel' => $id ));
        $form = $this->createForm(facilitiesType::class,$facilities );


        $form->handleRequest($request);

        if($form->isSubmitted() ) {
            $facilities->setIdHotel($user);
            $em->persist($facilities);
            $em->flush();
            return $this->redirect($this->generateUrl('facilities_settings',array('msg'=>"add successful")));
        }
        return $this->render('GstayhotelBundle:pages:hotel_facilities.html.twig',array(
            'form'=>$form->createView(),
            'Hotel'=>$Hotel,
            'felicity'=>$felecity,



        ));




    }

    /**
     * @Route("/delete_facilities/{id}",name="delete_facilities")
     */
    public function deletePromoAction($id)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }



        $em=$this->getDoctrine()->getManager();
        $facilities = $em->getRepository('GstayhotelBundle:facilities')->findOneBy(array('id' => $id ));

        $em->remove($facilities);
        $em->flush();

        return $this->redirect($this->generateUrl('facilities_settings',array('msg'=>"Delete successful")));





    }
}
