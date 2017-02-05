<?php

namespace Gstay\hotelBundle\Form;

use Doctrine\DBAL\Types\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HotelType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('stars',IntegerType::class)
            ->add('phone')
            ->add('map_link')
            ->add('dateBuilt',\Symfony\Component\Form\Extension\Core\Type\DateType::class)

            ->add('country')
            ->add('gouvernorat')
            ->add('adresse')
            ->add('description',TextareaType::class)
            ->add('architecture')
            ->add('matricule_fiscale')

            ->add('Save',SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gstay\hotelBundle\Entity\Hotel'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gstay_hotelbundle_hotel';
    }


}
