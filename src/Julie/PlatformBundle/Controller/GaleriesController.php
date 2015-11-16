<?php

namespace Julie\PlatformBundle\Controller;

use Julie\PlatformBundle\Entity\Galerie;
use Julie\PlatformBundle\Entity\Categorie;
use Julie\PlatformBundle\Entity\CategorieRepository;
use Julie\PlatformBundle\Form\GalerieType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GaleriesController extends Controller
{

	public function NouvelleGalerieAction(Request $request)
	{
		$galerie = new Galerie();
		$form = $this->get('form.factory')->create(new GalerieType(), $galerie);

		if ($form->handleRequest($request)->isValid()) 
		{
			$em = $this->getDoctrine()->getManager();
			$em->persist($galerie);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Galerie enregistrée.');

			return $this->redirect($this->generateUrl('home'));
		}

		return $this->render('JuliePlatformBundle:Galeries:NouvelleGalerie.html.twig', array(
			'form' => $form->createView(),
		));
	}

	public function listCategoriesAction()
	{
		$repository = $this
		->getDoctrine()
		->getManager()
		->getRepository('JuliePlatformBundle:Categorie');

		$listCategories = $repository->findAll();

		foreach ($listCategories as $categorie) {
			echo $categorie->getNom();
		}
		return $this->render('juliePlatformBundle:Categorie:index.html.twig', array(
		  'listCategories' => $listCategories
		));
	}
}