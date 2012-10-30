<?php

namespace piloto\servicioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EstadoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('entregado')
            ->add('noEntrega')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'piloto\servicioBundle\Entity\Estado'
        ));
    }

    public function getName()
    {
        return 'piloto_serviciobundle_estadotype';
    }
}
