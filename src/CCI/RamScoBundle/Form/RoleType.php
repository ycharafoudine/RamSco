<?php

namespace CCI\RamScoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RoleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeRole', 'text', array( 'attr'=>array('class'=>'form-control')))
            ->add('fonction', 'textarea', array( 'attr'=>array('class'=>'form-control')))
            ->add('enregistrer','submit', array( 'attr'=>array('class'=>'btn btn-default', 'value'=>'Enregistrer')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CCI\RamScoBundle\Entity\Role'
        ));
    }
}
