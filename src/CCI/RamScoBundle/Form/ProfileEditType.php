<?php

namespace CCI\RamScoBundle\Form;

use FOS\UserBundle\Form\Type\ProfileFormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;

class ProfileEditType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('prenom', 'text')
            ->add('adresse','text')
			->add('email','text')
			->add('telephone','text')
			->add('enregistrer','submit')
        ;
    }

    public function setDefaultOption(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CCI\RamScoBundle\Entity\Personne'
        ));
    }

} 
