<?php

namespace CCI\RamScoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParticipantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('Personne', 'entity', array(
				'class'    => 'CCIRamScoBundle:Personne',
				'property' => 'NomPrenom',
				'multiple' => false), array( 'attr'=>array('class'=>'form-control'), 'label_attr'=>array('class'=>'control-label')))
            ->add('Role', 'entity', array(
				'class'    => 'CCIRamScoBundle:Role',
				'property' => 'typeRole',
				'multiple' => false), array( 'attr'=>array('class'=>'form-control'), 'label_attr'=>array('class'=>'control-label')))
            ->add('Activite', 'entity', array(
				'class'    => 'CCIRamScoBundle:Activite',
				'property' => 'titreActivite',
				'multiple' => false), array( 'attr'=>array('class'=>'form-control'), 'label_attr'=>array('class'=>'control-label')))
			->add('enregistrer','submit', array( 'attr'=>array('class'=>'btn btn-default', 'value'=>'Enregistrer')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CCI\RamScoBundle\Entity\Participant'
        ));
    }
}
