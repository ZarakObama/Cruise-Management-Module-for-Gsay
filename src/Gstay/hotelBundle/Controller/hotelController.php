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
use AppBundle\Entity\User;
use Gstay\hotelBundle\Entity\Hotel;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;

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
    /**
     * @Route("/hotel_profile", name="hotel_profile")
     */
    public function hotel_profileAction()
    {
        $user = $this->getUser();
        $id =  $this->getUser()->getId();
        $email = $this->getUser()->getemail();

        if (!is_object($user) ) {

            return $this->redirectToRoute('fos_user_security_login');
        }

        $em=$this->getDoctrine()->getManager();
        $profile = $em->getRepository('GstayeventBundle:profile')->findOneBy(array('id_user' => $id ));
        $newid = $em->getRepository('AppBundle:User')->findOneBy(array('id' => $id ));
        if(empty($profile))
        {
            $profile= new profile();

            $profile->setIdUser($newid);
            $profile->setDateInscrit(new \DateTime());

            $em->persist($profile);
            $em->flush();

            return $this->render('GstayeventBundle:profile:myProfile.html.twig',array(
                'profile'=>$profile,
                'email'=>$email
            ));
        }



        return $this->render('GstayeventBundle:profile:myProfile.html.twig',array(
            'profile'=>$profile,
            'email'=>$email
        ));
    }
}