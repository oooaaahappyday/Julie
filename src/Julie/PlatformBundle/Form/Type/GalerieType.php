<?php

namespace Julie\PlatformBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Julie\PlatformBundle\Entity\Categorie;
use Julie\PlatformBundle\Entity\Image;
use Julie\PlatformBundle\Form\Type\ImageType;

class GalerieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',        'text')
            ->add('rang',       'integer')
            ->add('date',       'date')
            ->add('pays',       'text')
            ->add('lieux',      'text')
            ->add('materiel',   'text')
            ->add('categorie',  'entity', array(
                'class'         => 'JuliePlatformBundle:Categorie',
                'choice_label'  => 'nom',
                'expanded'      => false,
                'multiple'      => false,
                'required'      => true
                 ))
            ->add('images',             'collection', array(
                'type'          => new ImageType(),
                'prototype'     => true,
                'allow_add'     => true,
                'allow_delete'  => true,
                'by_reference'  => false,
                'required'      => false
                ))
            ->add('enregistrer','submit')
        ;
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

    /**
     * @return string
     */
    public function getName()
    {
        return 'julie_platformbundle_galerie';
    }

    public function addImage(Image $image)
    {
        $this->images->add($image);
    }

    public function removeImage(Image $image)
    {
        $this->images->removeElement($image);
    }
}
