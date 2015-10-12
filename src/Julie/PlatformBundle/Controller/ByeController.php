<?php

namespace Julie\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ByeController extends Controller
{
	public function indexAction()
	{
		$content = $this
		->get('templating')
		->render('JuliePlatformBundle:Bye:index.html.twig', array(
			'name' => 'Julie'
			)
		);
		return new Response($content);
	}
}