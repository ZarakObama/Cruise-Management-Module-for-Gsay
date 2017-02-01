<?php
/**
 * Created by PhpStorm.
 * User: HD_EXECUTION
 * Date: 01/02/2017
 * Time: 15:55
 */

namespace Gstay\carBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class carController extends Controller
{
    /**
     * @Route("/" )
     */
    public function indexAction()
    {
        return $this->render('GstaycarBundle:Default:index.html.twig');
    }
}

