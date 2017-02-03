<?php
/**
 * Created by PhpStorm.
 * User: HD_EXECUTION
 * Date: 01/02/2017
 * Time: 15:43
 */

namespace Gstay\eventBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use AppBundle\Entity\User;


class eventController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

       /* $user = $this->getUser();
        $id=0;
        if(!empty($user))
        {
            $id=$this->getUser()->getId();

        }


         $this->render('GstayeventBundle:Default:layout.html.twig',array(
            'id'=>$id
        ));*/

        return $this->render('test.html.twig');
    }

}