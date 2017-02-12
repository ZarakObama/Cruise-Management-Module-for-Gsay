<?php
/**
 * Created by PhpStorm.
 * User: Zarkouna
 * Date: 12/02/2017
 * Time: 22:17
 */

namespace Gstay\carBundle\Controller;


use Gstay\carBundle\Form\picturesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Gstay\carBundle\Entity\ProfileCroisiere;
use Gstay\carBundle\Entity\pictures;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class picturesController extends Controller
{
    /**
     * @Route("/cruise_pictures", name="cruise_pictures")
     */
    public function hotel_portfolioSettingsAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user)) {

            return $this->redirectToRoute('fos_user_security_login');
        }
        $id = $this->getUser()->getId();

        $pictures = new pictures();
        $em = $this->getDoctrine()->getManager();
        $ProfileCroisiere = $em->getRepository('GstaycarBundle:ProfileCroisiere')->findOneBy(array('id_user' => $id));
        $hid = $ProfileCroisiere->getId();
        $picturess = $em->getRepository('GstaycarBundle:pictures')->findBy(array('id_profile' => $hid));

        $form = $this->createForm(picturesType::class, $pictures);


        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $pictures->setIdProfile($ProfileCroisiere);
            $em->persist($pictures);
            $em->flush();
            return $this->redirect($this->generateUrl('cruise_pictures', array('msg' => "add successful")));
        }
        return $this->render('GstaycarBundle:profile:Pictures.html.twig', array(
            'form' => $form->createView(),
            'ProfileCroisiere' => $ProfileCroisiere,
            'picturess' => $picturess,


        ));
    }

        /**
         * @Route("/delete_cruise_pictures/{id}",name="delete_cruise_pictures")
         */
        public function deletehotelPortfolioAction($id)
        {
            $user = $this->getUser();
            if (!is_object($user) ) {

                return $this->redirectToRoute('fos_user_security_login');
            }



            $em=$this->getDoctrine()->getManager();
            $pictures = $em->getRepository('GstaycarBundle:pictures')->findOneBy(array('id' => $id ));

            $em->remove( $pictures);
            $em->flush();

            return $this->redirect($this->generateUrl('cruise_pictures',array('msg'=>"Delete successful")));





        }




}