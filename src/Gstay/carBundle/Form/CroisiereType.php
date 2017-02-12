<?php

namespace Gstay\carBundle\Form;

use Doctrine\DBAL\Types\DateType;
use Gstay\carBundle\Entity\Navire;
use Gstay\carBundle\GstaycarBundle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CroisiereType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('id_navire',EntityType::class,array('class'=>'GstaycarBundle:Navire','choice_label'=>'nom','multiple'=>false,))
            ->add('num_croissiere')
            ->add('nom')
            ->add('nb_cabine')
            ->add('destination')
            ->add('port_dep')
            ->add('port_arr')

            ->add('date_dep', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array(
                'widget' => 'choice',
                'years' => range(1920, 2017),
                'format' => 'dd-MMMM-yyyy',
                // do not render as type="date", to avoid HTML5 date pickers
                'html5' => false,



            ))


            ->add('date_arr', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array(
                'widget' => 'choice',
                'years' => range(1920, 2017),

                'format' => 'dd-MMMM-yyyy',
                // do not render as type="date", to avoid HTML5 date pickers
                'html5' => false,



            ))
            ->add('service_inclu')
            ->add('service_plus')
            ->add('offre_special')
            ->add('imageFile', VichImageType::class, [
                'required' => false,
                'allow_delete' => true, // not mandatory, default is true
                'download_link' => true, // not mandatory, default is true
            ]);


    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gstay\carBundle\Entity\Croisiere'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gstay_carbundle_croisiere';
    }


}
