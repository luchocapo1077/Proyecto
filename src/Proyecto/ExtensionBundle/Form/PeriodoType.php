<?php

namespace Proyecto\ExtensionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PeriodoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('fechaDesde','date',array(
                    'label' => 'Fecha Inicio','format' => 'dd-MM-yyyy',
                ))
            ->add('fechaHasta','date',array(
                    'label' => 'Fecha Fin','format' => 'dd-MM-yyyy',
                    'required' => false,
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proyecto\ExtensionBundle\Entity\Periodo'
        ));
    }

    public function getName()
    {
        return 'proyecto_extensionbundle_periodotype';
    }
}
