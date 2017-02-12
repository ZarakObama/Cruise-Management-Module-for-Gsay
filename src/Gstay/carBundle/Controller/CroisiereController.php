<?php
/**
 * Created by PhpStorm.
 * User: Zarkouna
 * Date: 11/02/2017
 * Time: 01:20
 */

namespace Gstay\carBundle\Controller;

use Gstay\carBundle\Entity\ProfileCroisiere;

use Gstay\carBundle\Entity\Croisiere;
use Gstay\carBundle\Entity\Navire;
use Gstay\carBundle\Form\CroisiereType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class CroisiereController extends Controller
{
    /**
     * @Route("/add_cruise",name="add_cruise")
     */
    public function addCruiseAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();

        $croisiere = new Croisiere();
        $em=$this->getDoctrine()->getManager();
        $ProfileCroisiere = $em->getRepository('GstaycarBundle:ProfileCroisiere')->findOneBy(array('id_user' => $id ));




        $form = $this->createForm(CroisiereType::class,$croisiere );


        $form->handleRequest($request);

        if($form->isSubmitted() ) {
            $croisiere->setIdProfile($ProfileCroisiere);
            $em->persist( $croisiere);
            $em->flush();
            //return $this->redirect($this->generateUrl('show_ship',array('msg'=>"add successful")));
        }

        return $this->render('GstaycarBundle:Cruise:add_cruise.html.twig',array(
            'form'=>$form->createView(),
            'ProfileCroisiere'=>$ProfileCroisiere,



        ));





    }
}