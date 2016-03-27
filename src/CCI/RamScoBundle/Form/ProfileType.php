<?php

namespace CCI\RamScoBundle\Form;

use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileType extends ProfileFormType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom', 'text', array(
                'label' => 'profile.fields.firstname',
                'translation_domain' => 'forms'
            ))
            ->add('Prenom', 'text', array(
                'label' => 'profile.fields.lastname',
                'translation_domain' => 'forms'
            ))
           
        ;
    }

    public function setDefaultOption(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => array('Default', 'Account')
        ));
    }

    public function getName()
    {
        return 'sf_web_app_fos_user_profile';
    }
} 
