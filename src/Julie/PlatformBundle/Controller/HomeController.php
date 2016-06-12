<?php

namespace Julie\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Julie\PlatformBundle\Entity\Galerie;
use Julie\PlatformBundle\Entity\Categorie;
use Julie\PlatformBundle\Entity\CategorieRepository;


class HomeController extends Controller
{
	public function indexAction()
	{
		$imageRepository = $this
			->getDoctrine()
			->getManager()
			->getRepository('JuliePlatformBundle:Image');

		$listImage = $imageRepository->findBy(array('galerie' => 27));

		return $this->render('JuliePlatformBundle:Home:index.html.twig', array(
			'id' => 27,
	  	'listImage' => $listImage
		));
		/*
		$content = $this
		->get('templating')
		->render('JuliePlatformBundle:Home:index.html.twig', array(
			'name' 	=> 'Julie'
			)
		);
		return new Response($content);
		*/
	}
/*
	public function indexAction()
	{
		
		$content = $this
		->get('templating')
		->render('JuliePlatformBundle:Home:index.html.twig', array(
			'name' => 'Julie'
			)
		);
		return new Response($content);
	}
*/
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

	public function contactAction()
	{
		$content = $this
		->get('templating')
		->render('JuliePlatformBundle:Navbar:contact.html.twig', array(
			'name' => 'Julie'
			)
		);
		return new Response($content);
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