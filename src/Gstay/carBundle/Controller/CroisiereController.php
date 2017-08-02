<?php
/**
 * Created by PhpStorm.
 * User: Zarkouna
 * Date: 11/02/2017
 * Time: 01:20
 */

namespace Gstay\carBundle\Controller;


use Doctrine\Common\Collections\ArrayCollection;
use Gstay\carBundle\Entity\Cabine;
use Gstay\carBundle\Entity\Itineraire;
use Gstay\carBundle\Entity\ProfileCroisiere;

use Gstay\carBundle\Entity\Croisiere;
use Gstay\carBundle\Form\CabineType;
use Gstay\carBundle\Form\CroisiereType;

use Gstay\carBundle\Form\EcroisiereType;
use Gstay\carBundle\Form\ItineraireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class CroisiereController extends Controller
{

    /**
     * @Route("/show_cruisePDF/{id}",name="show_cruisePDF")
     */
    public function PDF_cruiseAction (Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();


        $cabine = $em->getRepository('GstaycarBundle:Cabine')->findOneBy(array('id'=>$id));




        $html = $this->render('@Gstaycar/front/pdf.html.twig',array(

            'base_dir' => $this->get('kernel')->getRootDir() . '/../web' . $request->getBasePath(),

            'cabine'=>$cabine,




        ))->getContent();

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="projects.pdf"'
            )
        );

    }



    /**
     * @Route("/show_cruise",name="show_cruise")
     */
    public function profile_show_cruiseAction () {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();

        $em=$this->getDoctrine()->getManager();
        $ProfileCroisiere = $em->getRepository('GstaycarBundle:ProfileCroisiere')->findOneBy(array('id_user' => $id ));

        $croisiere = $em->getRepository('GstaycarBundle:Croisiere')->findAll();



        return $this->render('@Gstaycar/Cruise/show_cruise.html.twig',array(
            'Croisiere'=>$croisiere,
            'ProfileCroisiere'=>$ProfileCroisiere,
            'msg'=>"Edit successful"


        ));
    }




    /**
     * @Route("/add_cabine/{idd}" ,name="add_cabine")
     */
    public function addCabineAction(Request $request,$idd)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();

        $cabine = new Cabine();
        $em=$this->getDoctrine()->getManager();
        $ProfileCroisiere = $em->getRepository('GstaycarBundle:ProfileCroisiere')->findOneBy(array('id_user' => $id ));
        $Croisiere = $em->getRepository('GstaycarBundle:Croisiere')->findOneBy(array('id' => $idd ));
        $Cabine = $em->getRepository('GstaycarBundle:Cabine')->findBy(array('id_croisiere' => $idd ));



        $form = $this->createForm(CabineType::class,$cabine );


        $form->handleRequest($request);

        if($form->isSubmitted() ) {
            $cabine->setIdCroisiere($Croisiere);
            $em->persist( $cabine);

            $em->flush();
            return $this->redirect($this->generateUrl('add_cabine',array('idd'=>$idd)));
        }

        return $this->render('@Gstaycar/Cruise/add_cabine.html.twig',array(
            'form'=>$form->createView(),
            'Croisiere'=>$Croisiere,
            'Cabine'=>$Cabine,
             'ProfileCroisiere' => $ProfileCroisiere,


        ));




    }

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











       $day1 = new Itineraire();

        $croisiere->addDay($day1);
        $day2 = new Itineraire();

        $croisiere->addDay($day2);
        $day3 = new Itineraire();

        $croisiere->addDay($day3);
        $day4 = new Itineraire();

        $croisiere->addDay($day4);
        $day5 = new Itineraire();

        $croisiere->addDay($day5);
        $day6 = new Itineraire();

        $croisiere->addDay($day6);
        $day7 = new Itineraire();

        $croisiere->addDay($day7);
        $day8 = new Itineraire();

        $croisiere->addDay($day8);
        $day9 = new Itineraire();

        $croisiere->addDay($day9);
        $day10 = new Itineraire();

        $croisiere->addDay($day10);

        $form = $this->createForm(CroisiereType::class,$croisiere);


        $form->handleRequest($request);

        if($form->isSubmitted() ) {
            if ($form->isValid()){
                $croisiere->setIdProfile($ProfileCroisiere);





                $em->persist($croisiere);

           $em->persist( $day2);
            $em->persist( $day1);
                $em->persist( $day3);
                $em->persist( $day4);
                $em->persist( $day5);
                $em->persist( $day6);
                $em->persist( $day7);
                $em->persist( $day8);
                $em->persist( $day9);
                $em->persist( $day10);
                $em->flush();
            return $this->redirect($this->generateUrl('show_cruise',array('msg'=>"add successful")));
            }
        }

        return $this->render('GstaycarBundle:Cruise:add_cruise.html.twig',array(
            'form'=>$form->createView(),
            'ProfileCroisiere'=>$ProfileCroisiere,



        ));


    }


        /**
         * @Route("/add_days",name="add_days")
         */
    public function daysAction (Request $request )
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();
        $day = new Itineraire();

        $em=$this->getDoctrine()->getManager();
        $ProfileCroisiere = $em->getRepository('GstaycarBundle:ProfileCroisiere')->findOneBy(array('id_user' => $id ));



        $croisiere = $em->getRepository('GstaycarBundle:Croisiere')->find($id);
        $days=new ArrayCollection();
        foreach (($croisiere->getDays()) as $day) {
            $days->add($day);

        }
        $form = $this->createForm(ItineraireType::class, $croisiere);

        $form->handleRequest($request);
        if($form->isSubmitted() ) {
            $croisiere->setIdProfile($ProfileCroisiere);
                $em->persist( $day);
                 $em->persist( $croisiere);
            $em->flush();
        }
        return $this->render('@Gstaycar/Cruise/add-days.html.twig',array(
            'form'=>$form->createView(),
            'ProfileCroisiere'=>$ProfileCroisiere,



        ));

    }

    /**
     * @Route("/edit_cruise/{idd}",name="edit_cruise")
     */
    public function editCruiseAction(Request $request,$idd)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id =  $this->getUser()->getId();


        $em=$this->getDoctrine()->getManager();
        $ProfileCroisiere = $em->getRepository('GstaycarBundle:ProfileCroisiere')->findOneBy(array('id_user' => $id ));

        $Croisiere = $em->getRepository('GstaycarBundle:Croisiere')->find( $idd );
        $liste= $Croisiere->getDays();
        $Croisiere->setDays(new ArrayCollection());
        //$Croisiere1 = $em->getRepository('GstaycarBundle:Itineraire')->findBy(array('id_croisiere' => $idd ));






        $form = $this->createForm(CroisiereType::class,$Croisiere );


        $form->handleRequest($request);

        if($form->isSubmitted() ) {


            $em->persist($Croisiere);
            $em->flush();
            return $this->redirect($this->generateUrl('show_cruise',array('msg'=>"Edit successful")));
        }
        return $this->render('@Gstaycar/Cruise/edit_cruise.html.twig',array(
            'form'=>$form->createView(),
            'ProfileCroisiere'=>$ProfileCroisiere,
            'days'=>$liste
        ,




        ));




    }

    /**
     * @Route("/delete_cruise/{id}",name="delete_cruise")
     */
    public function delete_cruiseAction($id)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }



        $em=$this->getDoctrine()->getManager();
        $navire1 = $em->getRepository('GstaycarBundle:Itineraire')->findBy(array('id_croisiere' => $id ));
        $navire2 = $em->getRepository('GstaycarBundle:Cabine')->findBy(array('id_croisiere' => $id ));

        $navire = $em->getRepository('GstaycarBundle:Croisiere')->findOneBy(array('id' => $id ));
        foreach ($navire1 as $user_service) {
            $em->remove($user_service);
        }
        foreach ($navire2 as $user_service) {
            $em->remove($user_service);
        }
        $em->remove( $navire);
        $em->flush();

        return $this->redirect($this->generateUrl('show_cruise',array('msg'=>"Delete successful")));





    }

//affichage details



    /**
     * @Route("/show_cruises/{id}",name="show_cruises")
     */
    public function show_detailcruiseAction ($id) {


        $em=$this->getDoctrine()->getManager();

        $croisiere = $em->getRepository('GstaycarBundle:Croisiere')->findOneBy(array('id'=>$id));
       $a=$croisiere->getIdProfile();
        $days = $em->getRepository('GstaycarBundle:Itineraire')->findBy(array('id_croisiere'=>$id));
        $pictures = $em->getRepository('GstaycarBundle:pictures')->findBy(array('id_profile'=>$a));
        $cabine = $em->getRepository('GstaycarBundle:Cabine')->findBy(array('id_croisiere'=>$id));




        return $this->render('@Gstaycar/front/details_cruise.html.twig',array(
            'Croisiere'=>$croisiere,
            'days'=>$days,
            'pictures'=>$pictures,
            'cabine'=>$cabine,



        ));
    }
    /**
     * @Route("/show_cabineD/{id}",name="show_cabineD")
     */
    public function show_detailcabineAction ($id) {


        $em=$this->getDoctrine()->getManager();


        $cabine = $em->getRepository('GstaycarBundle:Cabine')->findOneBy(array('id'=>$id));




        return $this->render('@Gstaycar/front/details_cabine.html.twig',array(


            'cabine'=>$cabine,



        ));
    }
    /**
     * @Route("/cruise_list",name="cruise_list")
     */
    public function cruise_listAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $croisiere=$em->getRepository("GstaycarBundle:Croisiere")->findAll();
        // $dql="SELECT H FROM GstayhotelBundle:Hotel H";
        //  $Hotel->$em->createQuery($dql);
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');

        $result= $pagination = $paginator->paginate(
            $croisiere, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            $request->query->getInt('limit', 6)
        );

        return $this->render('@Gstaycar/front/list_cruise.html.twig',array("Croisiere"=>$result));
    }

    /**
     * @Route("/delete_cabine/{id}",name="delete_cabine")
     */
    public function delete_cabineAction($id)
    {
        $user = $this->getUser();
        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }



        $em=$this->getDoctrine()->getManager();
        $cabine = $em->getRepository('GstaycarBundle:Cabine')->find($id );


        $a=$cabine->getIdCroisiere()->getId();


        $em->remove( $cabine);

        $em->flush();
        return $this->redirect($this->generateUrl('add_cabine',array('idd'=>$a)));







    }
    /**
     * @Route("/search_cruise",name="search_cruise")
     */
    public function searchpromoAction (Request $requestrech){
        $em=$this->getDoctrine()->getManager();

        if($requestrech->isMethod('GET'))
        {
            $countryrech= $requestrech->get('destination');


            $query = $em->createQuery('SELECT c FROM GstaycarBundle:Croisiere c WHERE c.destination=:destination');
            $query->setParameters(array(
                'destination' => $countryrech



            ));
            /**
             * @var $paginator \Knp\Component\Pager\Paginator
             */
            $paginator  = $this->get('knp_paginator');

            $result= $pagination = $paginator->paginate(
                $query, /* query NOT result */
                $requestrech->query->getInt('page', 1)/*page number*/,
                $requestrech->query->getInt('limit', 6)
            );

        }

        return $this->render('@Gstaycar/front/list_cruise.html.twig',array("Croisiere"=>$result));
    }

}