<?php

namespace CCI\RamScoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', 'text', array( 'attr'=>array('class'=>'form-control',  'placeholder'=>"Nom"), 'label_attr'=>array('class'=>'control-label')))
        ->add('prenom', 'text', array( 'attr'=>array('class'=>'form-control',  'placeholder'=>"Préom"), 'label_attr'=>array('class'=>'control-label')))
        ->add('adresse', 'text', array( 'attr'=>array('class'=>'form-control',  'placeholder'=>"Adresse"), 'label_attr'=>array('class'=>'control-label')))
        ->add('enfants', 'choice', array(
              'choices' => array('Oui' => true, 'Non' => false),
              'choices_as_values' => true,
              'expanded'=> true,
              'multiple'=> false
              ))
        ->add('dateNaissance', 'birthday', array('format'=>'dd/MM/yyyy', 'placeholder' => array(
																	'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour')))
        ->add('telephone', 'number', array( 'attr'=>array('class'=>'form-control',  'placeholder'=>"01 234 567"), 'label_attr'=>array('class'=>'control-label')))
        ->add('permis', 'choice', array(
              'choices' => array('Oui' => true, 'Non' => false),
              'choices_as_values' => true,
              'expanded'=> true,
              'multiple'=> false
              ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getNom()
    {
        return $this->getBlockPrefix();
    }
    
    public function getPrenom()
    {
        return $this->getBlockPrefix();
    }
    
    public function getAdresse()
    {
        return $this->getBlockPrefix();
    }
    
    public function getEnfants()
    {
        return $this->getBlockPrefix();
    }
    
    public function getDateNaissance()
    {
        return $this->getBlockPrefix();
    }
    
    public function getTelephone()
    {
        return $this->getBlockPrefix();
    }
    
    public function getPermis()
    {
        return $this->getBlockPrefix();
    }
    
}
