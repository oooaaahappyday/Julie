<?php

namespace Julie\PlatformBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Collection;

class ContactType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $option)
	{
		$builder
			->add('name', 'text', array(
					'attr'	=> array(
						'placeholder' => 'Quel est votre nom?',
						'pattern'			=> '.{2,}' //minlength
					)
				))
			->add('email', 'email', array(
					'attr'	=> array(
						'placeholder' => 'Que je puisse vous répondre.'
					)
				))
			->add('sujet', 'text', array(
					'attr'	=> array(
						'placeholder'	=> 'Le sujet de votre message.',
						'pattern'			=> '.{3,}'
					)
				))
			->add('message', 'textarea', array(
					'attr'	=> array(
						'cols'				=> 100,
						'rows'				=> 5,
						'placeholder' => 'Votre message...'
					)
				))
			->add('envoyer', 'submit')
		;
	}

	public function setDefaultOptions (OptionsResolverInterface $resolver)
	{
		$collectionConstraint = new Collection(array(
			'name' 		=> array(
				new NotBlank(array('message' 	=> 'Votre nom est important.')),
				new Length(array('min' 				=> 2 ))
				),
			'email' 	=> array(
				new NotBlank(array('message' 	=> 'Votre email est important.')),
				new Email(array('message' 		=> 'Adresse mail non valide.'))
				),
			'sujet' => array(
				new NotBlank(array('message'	=> 'Le sujet est important.')),
				new Length(array('min'				=> 3))
				),
			"message"	=> array(
				new NotBlank(array('message'	=> 'Votre mail est vide.')),
				new Length(array('min'				=> 5))
				)
			));
			$resolver->setDefaults(array(
				'constraints' => $collectionConstraint
			));
	}

	public function getName()
	{
		return 'contact';
	}
}