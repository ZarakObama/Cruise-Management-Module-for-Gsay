<?php

namespace Gstay\carBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class NavireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')

            ->add('mise_service' ,\Symfony\Component\Form\Extension\Core\Type\DateType::class, array(
        'widget' => 'choice',
        'years' => range(1920, 2017),

        'format' => 'dd-MMMM-yyyy',




    ))
            ->add('renove' ,\Symfony\Component\Form\Extension\Core\Type\DateType::class, array(
                'widget' => 'choice',
                'years' => range(1920, 2017),

                'format' => 'dd-MMMM-yyyy',




            ))


            ->add('longueur')
            ->add('tirant')
            ->add('tonnage')
            ->add('vitesse')
            ->add('nbr_pont')
            ->add('capacite')
            ->add('equipage')
            ->add('langue')
            ->add('monnaies')
            ->add('internet')
            ->add('cabines')
            ->add('service')
            ->add('divertis')
            ->add('fitness')
            ->add('shopping')
            ->add('famille')
            ->add('tenue')
            ->add('imageFile', VichImageType::class, [
                'required' => false,
                'allow_delete' => true, // not mandatory, default is true
                'download_link' => true, // not mandatory, default is true
            ])

                   ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gstay\carBundle\Entity\Navire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gstay_carbundle_navire';
    }


}
