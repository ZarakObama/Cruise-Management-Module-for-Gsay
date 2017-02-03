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
     * @Route("/userprofile")
     */
    public function indexAction()
    {
        return $this->render('GstayguesthostBundle:interface:profile.html.twig');
    }
}
