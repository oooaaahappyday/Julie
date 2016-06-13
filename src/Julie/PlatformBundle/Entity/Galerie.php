<?php

namespace Julie\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Julie\PlatformBundle\Entity\Image;


/**
 * Galerie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Julie\PlatformBundle\Entity\GalerieRepository")
 * @ORM\Entity
 */
class Galerie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="rang", type="integer")
     * @Assert\Type(
     *  type="integer",
     *  message="The value {{ value }} is not a valid {{ type }}."
     *)
     */
    private $rang;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     * @Assert\Length(min=2)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="lieux", type="string", length=255)
     */
    private $lieux;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="materiel", type="text")
     */
    private $materiel;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @ORM\OneToMany(targetEntity="Image", mappedBy="galerie", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $images;


    public function __construct()
    {
        $this->images    = new ArrayCollection();
        $this->createdAt = new \datetime();
        $this->updatedAt = new \datetime();

    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Galerie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get rang
     *
     * @return string
     */
    public function getRang()
    {
        return $this->rang;
    }

    /**
     * Set rang
     *
     * @param integer $rang
     *
     * @return Galerie
     */
    public function setRang($rang)
    {
        $this->rang = $rang;

        return $this;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Galerie
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Galerie
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set lieux
     *
     * @param string $lieux
     *
     * @return Galerie
     */
    public function setLieux($lieux)
    {
        $this->lieux = $lieux;

        return $this;
    }

    /**
     * Get lieux
     *
     * @return string
     */
    public function getLieux()
    {
        return $this->lieux;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Galerie
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Galerie
     */
    public function setUpdatedAt()
    {
        $this->updatedAt = new \datetime();

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set materiel
     *
     * @param string $materiel
     *
     * @return Galerie
     */
    public function setMateriel($materiel)
    {
        $this->materiel = $materiel;

        return $this;
    }

    /**
     * Get materiel
     *
     * @return string
     */
    public function getMateriel()
    {
        return $this->materiel;
    }

    /**
    *@ORM\Column(name="public", type="boolean")
    */
    private $public = true;

    /**
     * Set public
     *
     * @param boolean $public
     *
     * @return Galerie
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public
     *
     * @return boolean
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Galerie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
    * (solve the problem of string conversion)
    *
    * @return string String representation of this class
    */
    public function __toString()
    {
        return $this->nom;
    }

    /**
     * Add images
     *
     * @param \Julie\PlatformBundle\Entity\Image $images
     *
     * @return Galerie
     */
    public function addImage(\Julie\PlatformBundle\Entity\Image $images)
    {
        $this->images[] = $images;
        $images->setGalerie($this);

        return $this;
    }

    /**
     * Set image
     *
     * @param \Julie\PlatformBundle\Entity\Image $images
     *
     * @return Galerie
     */
    public function setImages(ArrayCollection $images)
    {
        foreach ($images as $image){
            $image->setGalerie($this);
        }
        $this->images = $images;

        return $this;
    }


    /**
     * Remove images
     *
     * @param \Julie\PlatformBundle\Entity\Image $images
     */
    public function removeImage(\Julie\PlatformBundle\Entity\Image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }
}
