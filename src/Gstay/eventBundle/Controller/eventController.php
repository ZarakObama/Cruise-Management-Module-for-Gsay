<?php
/**
 * Created by PhpStorm.
 * User: HD_EXECUTION
 * Date: 01/02/2017
 * Time: 15:43
 */

namespace Gstay\eventBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class eventController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('GstayeventBundle:pages:test.html.twig');
    }

}