<?php
/**
 * Created by PhpStorm.
 * User: HD_EXECUTION
 * Date: 01/02/2017
 * Time: 15:50
 */

namespace Gstay\guesthostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class hostguestController extends Controller
{

    /**
     * @Route("/userprofile",name="userprofile")
     */
    public function indexAction()
    {
        return $this->render('GstayguesthostBundle:interface:profile.html.twig');
    }

    /**
     * @Route("/usersetting",name="setting")
     */
    public function SetAction()
    {
        return $this->render('GstayguesthostBundle:interface:SettingProfile.html.twig');
    }

    /**
     * @Route("/review",name="review")
     */
    public function ReviewAction()
    {
        return $this->render('GstayguesthostBundle:interface:userreview.html.twig');
    }

    /**
     * @Route("/listbooking",name="listbooking")
     */
    public function ListBookingAction()
    {
        return $this->render('GstayguesthostBundle:interface:list.html.twig');
    }


}
