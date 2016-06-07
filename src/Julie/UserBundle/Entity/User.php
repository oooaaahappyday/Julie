<?php

// Ce fichier override l'entité User de base de FOSUserBundle en rajoutant la propriété firstLogin (compteur de login)  nécéssaire au fonctionnement du premier onboarding

namespace Julie\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    
    public function __construct()
    {
        $this->salt = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
        $this->enabled              = false;
        $this->locked               = false;
        $this->expired              = false;
        $this->roles                = array();
        $this->credentialsExpired   = false;
    }

}

