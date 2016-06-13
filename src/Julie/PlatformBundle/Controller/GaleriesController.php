<?php

namespace Julie\PlatformBundle\Controller;

use Julie\PlatformBundle\Entity\Galerie;
use Julie\PlatformBundle\Entity\Categorie;
use Julie\PlatformBundle\Entity\CategorieRepository;
use Julie\PlatformBundle\Form\Type\GalerieType;
use Julie\PlatformBundle\Form\Type\editGalerieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GaleriesController extends Controller
{
	/**
     *@Template
 	 */
	public function NouvelleGalerieAction(Request $request)
	{
		$galerie = new Galerie();
		$form = $this->createForm(new GalerieType(), $galerie);

		if ($form->handleRequest($request)->isValid()) 
		{
			$em = $this->getDoctrine()->getManager();
			$em->persist($galerie);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Galerie enregistrée.');

			return $this->redirect($this->generateUrl('home'));
		}

		return array(
			'form' => $form->createView(),
			);
	}

	/**
	 *@Template
	 */
	public function editGalerieAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$galerie = $em->getRepository('JuliePlatformBundle:Galerie')->find($id);
		if (null === $galerie) {
			throw new NotFoundHttpException("La galerie n'existe pas.");
		}
		$galerie->setUpdatedAt();
		// To compare the content of the form sent and the array (Images) in db
		$originalImages = new ArrayCollection();
		foreach ($galerie->getImages() as $image) {
			$originalImages->add($image);
		}
		$form = $this->createForm(new editGalerieType(), $galerie);
			if ($form->handleRequest($request)->isValid()) {
				// Compare and remove images deleted in DOM by the form
				foreach ($originalImages as $image) {
					if(false === $galerie->getImages()->contains($image)) {
						$galerie->getImages()->removeElement($image);
						$em->remove($image);
					}
				}
				$em->persist($galerie);
				$em->flush();
				$request->getSession()->getFlashBag()->add('notice', 'Galerie modifiée.');
				return $this->redirect($this->generateUrl('Galerie_show', array('id' => $galerie->getId())));
			}
			return array('form'=> $form->createView(), 'galerie'=> $galerie, 'id'=> $id);
		}

		/**
		 *@Template
		 */
		public function deleteGalerieAction($id, Request $request)
		{
			$em = $this->getDoctrine()->getManager();
			$galerie = $em->getRepository('JuliePlatformBundle:Galerie')->find($id);


			if (null === $galerie) {
				throw new NotFoundHttpException("La galerie n'existe pas.");
			}

			$form = $this->createFormBuilder()->getForm();

			if($form->handleRequest($request)->isValid()) {
				$em->remove($galerie);
				$em->flush();

				$request->getSession()->getFlashBag()->add('notice', 'Galerie supprimée.');
				return $this->redirect($this->generateUrl('Home_page_Julie'));
			}

			return array(
				'form' 		=> $form->createView(),
				'galerie' 	=> $galerie,
				'id' 		=> $id
				);
		}

		/**
		 *@Template
		 */
		public function showGalerieAction($id)
		{
			$imageRepository = $this
			->getDoctrine()
			->getManager()
			->getRepository('JuliePlatformBundle:Image');

			$listImage = $imageRepository->findBy(
				array('galerie' => $id));
			
			return array(
					'id' 		=> $id,
					'listImage' => $listImage
					);
		}

		/**
		 *@Template
		 */
		public function imageDetailsAction($id)
		{

			$imageRepository = $this
			->getDoctrine()
			->getManager()
			->getRepository('JuliePlatformBundle:Image');

			$image = $imageRepository->find($id);
			
			return array(
					'id' 	=> $id,
					'image' => $image
					);
		}
	}