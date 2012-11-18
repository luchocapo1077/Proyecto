<?php

namespace Proyecto\ExtensionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExtensionFilterType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('soloProyectosVigentes', 'checkbox', array(
                    'label' => 'Mostrar solo proyectos vigentes: ',
                    'required' => false,
                ))
                ->add('areas', 'entity', array(
                    'label' => 'Areas',
                    'class' => 'ProyectoExtensionBundle:Area',
                    'property' => 'nombre','required' => false,
                    'multiple' => true, 'expanded' => true
                ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Proyecto\ExtensionBundle\Entity\ExtensionFilter'
        ));
    }

    public function getName() {
        return 'proyecto_extensionbundle_extension_filter_type';
    }

}
