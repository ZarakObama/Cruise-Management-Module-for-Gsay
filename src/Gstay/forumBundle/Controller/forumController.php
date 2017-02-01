<?php
/**
 * Created by PhpStorm.
 * User: HD_EXECUTION
 * Date: 01/02/2017
 * Time: 15:53
 */

namespace Gstay\forumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class forumController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('GstayforumBundle:Default:index.html.twig');
    }
}

