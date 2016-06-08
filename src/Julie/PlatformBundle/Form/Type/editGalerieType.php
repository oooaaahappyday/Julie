<?php

namespace Julie\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Julie\PlatformBundle\Form\GalerieType;
use Julie\PlatformBundle\Form\ImageType;


class editGalerieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Julie\PlatformBundle\Entity\Galerie'
        ));
    }

    public function getName()
    {
        return 'julie_platformbundle_edit_galerie';
    }

    public function getParent()
    {
        return new GalerieType();
    }
}
