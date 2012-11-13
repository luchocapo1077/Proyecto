<?php

namespace Proyecto\ExtensionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProyectoType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nombre')
                ->add('link')
                ->add('area', 'entity', array('class' => 'ProyectoExtensionBundle:Area', 'empty_value' =>
                    'Seleccione un area', 'required' => false));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Proyecto\ExtensionBundle\Entity\Proyecto'
        ));
    }

    public function getName() {
        return 'proyecto_extensionbundle_proyectotype';
    }

}
