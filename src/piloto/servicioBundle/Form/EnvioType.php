<?php

namespace piloto\servicioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnvioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idFormasEnvio')
            ->add('idFormulario')
            ->add('idEstado')
            ->add('idMensajero')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'piloto\servicioBundle\Entity\Envio'
        ));
    }

    public function getName()
    {
        return 'piloto_serviciobundle_enviotype';
    }
}
