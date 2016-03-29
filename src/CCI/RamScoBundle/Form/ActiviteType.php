<?php

namespace CCI\RamScoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActiviteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreActivite','text', array( 'attr'=>array('class'=>'form-control',  'placeholder'=>"Titre de l'activité"), 'label_attr'=>array('class'=>'control-label')))
			->add('theme','text', array( 'attr'=>array('class'=>'form-control',  'placeholder'=>"Thème"), 'label_attr'=>array('class'=>'control-label')))
			->add('lieu','text', array( 'attr'=>array('class'=>'form-control',  'placeholder'=>"Lieu"), 'label_attr'=>array('class'=>'control-label')))
			->add('dateActivite','datetime', array( 'attr'=>array('class'=>'date', 'format'=>'dd/MM/yyyy HH:ii')))
			->add('fournitures','text', array( 'attr'=>array('class'=>'form-control',  'placeholder'=>"Fournitures"), 'label_attr'=>array('class'=>'control-label')))
			->add('enregistrer','submit', array( 'attr'=>array('class'=>'btn btn-default', 'value'=>'Enregistrer')))
            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CCI\RamScoBundle\Entity\Activite'
        ));
    }
}
