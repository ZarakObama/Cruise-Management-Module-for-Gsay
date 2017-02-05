<?php
/**
 * Created by PhpStorm.
 * User: HD_EXECUTION
 * Date: 01/02/2017
 * Time: 15:46
 */

namespace Gstay\hotelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
}