<?php

namespace Julie\PlatformBundle\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Doctrine\ORM\EntityManager;

class MenuBuilder
{
	private $factory;
	private $em;

	/**
	* @param FactoryInterface $factory
	*/
	public function __construct(FactoryInterface $factory, EntityManager $em)
	{
		$this->factory 	= $factory;
		$this->em 			= $em;
	}

	public function createMainMenu()
	{
		$menu = $this->factory->createItem('root');

		$menu->addChild('Categorie', array('label' => 'Mes Reportages' ));

		// get list from db
		$listCategories = $this->em->getRepository('JuliePlatformBundle:Categorie')->findAll();
		// sub menus
		foreach ($listCategories as $categorie)
		{
			$menu['Categorie']->addChild(
				'categorie_' . $categorie->getId(), array(
					'label' => $categorie->getNom(),
					'route' => 'Contact'
					));
		}
		
// Il faudra chercher un moyen un peu plus DRY pour implanter cette navbar dynamique
		return $menu;
	}

	public function createReportageMenu()
	{
		$menu = $this->factory->createItem('root');
		
		$listGaleries = $this->em->getRepository('JuliePlatformBundle:Galerie')->findBy(
			array('categorie' => 'reportage'),
			array('rang' 			=> 'ASC')
		);
		foreach ($listGaleries as $galerie)
		{
			$menu->addChild(
				'galerie_' . $galerie->getId(), array(
					'label' => $galerie->getNom(),
					'route' => 'Galerie_show',
					'routeParameters' => array(
						'categorie' => 'reportage',
						'id' => $galerie->getId())
					));
		}
		return $menu;
	}

	public function createStudioMenu()
	{
		$menu = $this->factory->createItem('root');
		$listGaleries = $this->em->getRepository('JuliePlatformBundle:Galerie')->findBy(
			array('categorie' => 'studio'),
			array('rang' 			=> 'ASC')
			);
		foreach ($listGaleries as $galerie)
		{
			$menu->addChild(
				'galerie_' . $galerie->getId(), array(
					'label' => $galerie->getNom(),
					'route' => 'Galerie_show',
					'routeParameters' => array(
						'categorie' => 'studio',
						'id' => $galerie->getId())
					));
		}
		return $menu;
	}

	public function createVideoMenu()
	{
		$menu = $this->factory->createItem('root');
		$listGaleries = $this->em->getRepository('JuliePlatformBundle:Galerie')->findBy(
			array('categorie' => 'video'),
			array('rang' 			=> 'ASC')
			);
		foreach ($listGaleries as $galerie)
		{
			$menu->addChild(
				'galerie_' . $galerie->getId(), array(
					'label' => $galerie->getNom(),
					'route' => 'Galerie_show',
					'routeParameters' => array(
						'categorie' => 'video',
						'id' => $galerie->getId())
					));
		}
		return $menu;
	}

	public function createOthersMenu()
	{
		$menu = $this->factory->createItem('root');
		$listGaleries = $this->em->getRepository('JuliePlatformBundle:Galerie')->findBy(
			array('categorie' => 'other'),
			array('rang' 			=> 'ASC')
			);
		foreach ($listGaleries as $galerie)
		{
			$menu->addChild(
				'galerie_' . $galerie->getId(), array(
					'label' => $galerie->getNom(),
					'route' => 'Galerie_show',
					'routeParameters' => array(
						'categorie' => 'other',
						'id' => $galerie->getId())
					));
		}
		return $menu;
	}

	public function createProjectsMenu()
	{
		$menu = $this->factory->createItem('root');
		$listGaleries = $this->em->getRepository('JuliePlatformBundle:Galerie')->findBy(
			array('categorie' => 'projects'),
			array('rang' 			=> 'ASC')
			);
		foreach ($listGaleries as $galerie)
		{
			$menu->addChild(
				'galerie_' . $galerie->getId(), array(
					'label' => $galerie->getNom(),
					'route' => 'Galerie_show',
					'routeParameters' => array(
						'categorie' => 'projects',
						'id' => $galerie->getId())
					));
		}
		return $menu;
	}
}
