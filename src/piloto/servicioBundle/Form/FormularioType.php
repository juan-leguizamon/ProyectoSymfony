<?php

namespace piloto\servicioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormularioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idDestinatario')
            ->add('idTipoRemitente')
            ->add('idFormaPago')
            ->add('idPaquete')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'piloto\servicioBundle\Entity\Formulario'
        ));
    }

    public function getName()
    {
        return 'piloto_serviciobundle_formulariotype';
    }
}
