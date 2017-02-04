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
    /**
     * @return mixed
     */
    public function hotel_listAction()
    {
        return $this->render('GstayhotelBundle:pages:hotel_list.html.twig');
    }
}