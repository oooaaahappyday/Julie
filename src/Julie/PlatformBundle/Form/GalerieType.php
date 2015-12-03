<?php

namespace Julie\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Julie\PlatformBundle\Entity\Categorie;

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
            ->add('image',      new ImageType())
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
}
