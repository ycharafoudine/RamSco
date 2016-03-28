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
            ->add('nom', 'text', array( 'attr'=>array('class'=>'form-control',  'placeholder'=>"Nom"), 'label_attr'=>array('class'=>'control-label')))
            ->add('prenom', 'text', array( 'attr'=>array('class'=>'form-control',  'placeholder'=>"Prénom"), 'label_attr'=>array('class'=>'control-label', 'label'=>'Prénom')))
            ->add('adresse','text', array( 'attr'=>array('class'=>'form-control',  'placeholder'=>"Adresse"), 'label_attr'=>array('class'=>'control-label')))
			->add('email','text', array( 'attr'=>array('class'=>'form-control',  'placeholder'=>"E-mail"), 'label_attr'=>array('class'=>'control-label')))
			->add('telephone','text', array( 'attr'=>array('class'=>'form-control',  'placeholder'=>"Téléphone"), 'label_attr'=>array('class'=>'control-label')))
			->add('enregistrer','submit', array( 'attr'=>array('class'=>'btn btn-default', 'value'=>'Enregistrer')))
        ;
    }

    public function setDefaultOption(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CCI\RamScoBundle\Entity\Personne'
        ));
    }

} 
