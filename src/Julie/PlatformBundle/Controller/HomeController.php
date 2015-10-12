<?php

namespace Julie\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
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
}