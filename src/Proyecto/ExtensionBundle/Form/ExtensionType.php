<?php

namespace Proyecto\ExtensionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExtensionType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('proyecto', 'entity', array('class' => 'ProyectoExtensionBundle:Proyecto', 'empty_value' =>
                    'Seleccione un proyecto', 'required' => false))
                ->add('periodo', new PeriodoType())
                ->add('lugar', 'entity', array('class' => 'ProyectoExtensionBundle:Lugar', 'empty_value' =>
                    'Seleccione un lugar', 'required' => false));

        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Proyecto\ExtensionBundle\Entity\Extension'
        ));
    }

    public function getName() {
        return 'proyecto_extensionbundle_extensiontype';
    }

}
