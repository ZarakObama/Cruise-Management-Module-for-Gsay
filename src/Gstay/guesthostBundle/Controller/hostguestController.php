<?php
/**
 * Created by PhpStorm.
 * User: HD_EXECUTION
 * Date: 01/02/2017
 * Time: 15:50
 */

namespace Gstay\guesthostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class hostguestController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('GstayguesthostBundle:Default:index.html.twig');
    }
}
