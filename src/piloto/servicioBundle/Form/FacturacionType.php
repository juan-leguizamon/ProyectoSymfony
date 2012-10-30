<?php

namespace piloto\servicioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FacturacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idEnvio')
            ->add('firmaDestinatario')
            ->add('firmaMensajero')
            ->add('costoEnvio')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'piloto\servicioBundle\Entity\Facturacion'
        ));
    }

    public function getName()
    {
        return 'piloto_serviciobundle_facturaciontype';
    }
}
