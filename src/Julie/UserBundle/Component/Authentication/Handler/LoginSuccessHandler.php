<?php
namespace Julie\UserBundle\Component\Authentication\Handler;
 
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;

 
class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{	
	private $securityContext;
	private $em;
    protected $router;
	
	public function __construct(SecurityContext $security, Router $router, Doctrine $doctrine)
	{
		$this->router 		= $router;
		$this->security 	= $security;
		$this->em       	= $doctrine->getManager();
	}
	
	public function onAuthenticationSuccess(Request $request, TokenInterface $token)
	{
		
		if ($this->security->isGranted('ROLE_SUPER_ADMIN', 'ROLE_ADMIN'))
		{
			$user 			= $token->getUser();
			$response 	= new RedirectResponse($this->router->generate('Home_page_Julie'));
			}
		return $response;
	}
}
