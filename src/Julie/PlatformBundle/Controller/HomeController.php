<?php

namespace Julie\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Julie\PlatformBundle\Entity\Galerie;
use Julie\PlatformBundle\Entity\Categorie;
use Julie\PlatformBundle\Entity\CategorieRepository;
use Julie\PlatformBundle\Form\Type\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class HomeController extends Controller
{
	public function indexAction()
	{
		$imageRepository = $this
			->getDoctrine()
			->getManager()
			->getRepository('JuliePlatformBundle:Image');

		$listImage = $imageRepository->findBy(array('galerie' => 1));

		return $this->render('JuliePlatformBundle:Home:index.html.twig', array(			
			'id' => 1,
	  	'listImage' => $listImage
		));
	}

	public function aboutAction()
	{
		$content = $this
		->get('templating')
		->render('JuliePlatformBundle:Navbar:about.html.twig', array(
			'name' => 'Julie'
			)
		);
		return new Response($content);
	}

	/**
	 *@Route("/contact", name="contact")
	 *@Template
	 */

	public function contactAction(Request $request)
	{
		$form = $this->createForm(new ContactType());
			if ($request->isMethod('POST')) {
				$form->bind($request);
					if ($form->isValid()) {
						$message = \Swift_Message::newInstance()
							->setSubject($form->get('sujet')->getData())
							->setFrom($form->get('email')->getData())
							->setTo('joseph.boisselier@gmail.com')
							->setBody(
									$this->renderView(
										'JuliePlatformBundle:Mail:contact_mail.html.twig', array(
												'ip' => $request->getClientIp(),
												'name' => $form->get('name')->getData(),
												'message' => $form->get('message')->getData()
												)
										)
								);
						$this->get('mailer')->send($message);
						$request->getSession()->getFlashBag()->add('success', 'Votre mail a bien été envoyé, merci!');
						return $this->redirect($this->generateUrl('home'));
					}
		}
		return array(
				'form' => $form->createView()
			);
	}

	public function menuAction()
	{
		$repository = $this
		->getDoctrine()
		->getManager()
		->getRepository('JuliePlatformBundle:Galerie')
		;
	}
}
