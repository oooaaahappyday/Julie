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
		
		$listGaleries = $this->em->getRepository('JuliePlatformBundle:Galerie')->findBy(array('categorie' => 'reportage'));
		foreach ($listGaleries as $galerie)
		{
			$menu->addChild(
				'galerie_' . $galerie->getId(), array(
					'label' => $galerie->getNom(),
					'route' => 'Galerie_show',
					'routeParameters' => array('id' => $galerie->getId())
					));
		}
		return $menu;
	}

	public function createArtMenu()
	{
		$menu = $this->factory->createItem('root');
		$listGaleries = $this->em->getRepository('JuliePlatformBundle:Galerie')->findBy(array('categorie' => 'art'));
		foreach ($listGaleries as $galerie)
		{
			$menu->addChild(
				'galerie_' . $galerie->getId(), array(
					'label' => $galerie->getNom(),
					'route' => 'Galerie_show',
					'routeParameters' => array('id' => $galerie->getId())
					));
		}
		return $menu;
	}

	public function createStudioMenu()
	{
		$menu = $this->factory->createItem('root');
		$listGaleries = $this->em->getRepository('JuliePlatformBundle:Galerie')->findBy(array('categorie' => 'studio'));
		foreach ($listGaleries as $galerie)
		{
			$menu->addChild(
				'galerie_' . $galerie->getId(), array(
					'label' => $galerie->getNom(),
					'route' => 'Galerie_show',
					'routeParameters' => array('id' => $galerie->getId())
					));
		}
		return $menu;
	}

	public function createVideoMenu()
	{
		$menu = $this->factory->createItem('root');
		$listGaleries = $this->em->getRepository('JuliePlatformBundle:Galerie')->findBy(array('categorie' => 'video'));
		foreach ($listGaleries as $galerie)
		{
			$menu->addChild(
				'galerie_' . $galerie->getId(), array(
					'label' => $galerie->getNom(),
					'route' => 'Galerie_show',
					'routeParameters' => array('id' => $galerie->getId())
					));
		}
		return $menu;
	}

	public function createOthersMenu()
	{
		$menu = $this->factory->createItem('root');
		$listGaleries = $this->em->getRepository('JuliePlatformBundle:Galerie')->findBy(array('categorie' => 'others'));
		foreach ($listGaleries as $galerie)
		{
			$menu->addChild(
				'galerie_' . $galerie->getId(), array(
					'label' => $galerie->getNom(),
					'route' => 'Galerie_show',
					'routeParameters' => array('id' => $galerie->getId())
					));
		}
		return $menu;
	}

	public function createProjectsMenu()
	{
		$menu = $this->factory->createItem('root');
		$listGaleries = $this->em->getRepository('JuliePlatformBundle:Galerie')->findBy(array('categorie' => 'projects'));
		foreach ($listGaleries as $galerie)
		{
			$menu->addChild(
				'galerie_' . $galerie->getId(), array(
					'label' => $galerie->getNom(),
					'route' => 'Galerie_show',
					'routeParameters' => array('id' => $galerie->getId())
					));
		}
		return $menu;
	}
}