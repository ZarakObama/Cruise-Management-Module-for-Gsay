<?php

namespace Gstay\carBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProfileCroisiereType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_compa')
            ->add('mat_fisc')

            ->add('post_comp')
            ->add('first_name')
            ->add('last_name')
            ->add('country')
            ->add('state')
            ->add('city')
            ->add('street_adresse')
            ->add('phone_num')
            ->add('fax')
            ->add('imageFile', VichImageType::class, [
                 'required' => false,
                 'allow_delete' => true, // not mandatory, default is true
                 'download_link' => true, // not mandatory, default is true
             ])



            ->add('stars')

        ->add('Save',SubmitType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gstay\carBundle\Entity\ProfileCroisiere'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gstay_carbundle_profilecroisiere';
    }


}
