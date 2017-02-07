<?php

namespace Gstay\hotelBundle\Form;

use Gstay\hotelBundle\Entity\facilities;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class facilitiesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', ChoiceType::class, array(
        'choices'  => array(
            'Free breakfast' => 'Free breakfast' ,
            'Swimming pool' => 'Swimming pool' ,
            'Smoking area' => 'Smoking area' ,
            'Hair dryer' => 'Hair dryer' ,
            'Spa service' => 'Spa service' ,
            'Restaurant' => 'Restaurant' ,
            'Airport transfer' => 'Airport transfer' ,
            'Laundry service' => 'Laundry service' ,
            '24-hour front desk' => '24-hour front desk' ,
            'Free parking' => 'Free parking' ,
            'Casino' => 'Casino' ,
            'Wi-Fi' => 'Wi-Fi' ,
            'Business center' =>  'Business center' ,


        ),
    ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gstay\hotelBundle\Entity\facilities'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gstay_hotelbundle_facilities';
    }


}
