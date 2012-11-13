<?php

namespace Proyecto\ExtensionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExtensionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('proyecto')
            ->add('periodo')
            ->add('lugar')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proyecto\ExtensionBundle\Entity\Extension'
        ));
    }

    public function getName()
    {
        return 'proyecto_extensionbundle_extensiontype';
    }
}
