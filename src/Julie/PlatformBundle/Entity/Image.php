<?php

namespace Julie\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use symfony\Component\Validator\Constraints as Assert;
use Julie\PlatformBundle\Entity\Galerie;

/**
 *Image
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Julie\PlatformBundle\Entity\ImageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Image
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
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=255)
     */
    private $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;
    

    /**
     * @ORM\ManyToOne(targetEntity="Galerie", inversedBy="images")
     * @ORM\JoinColumn(name="galerie_id", referencedColumnName="id")
     */
    private $galerie;

    
    protected $file;

    private $tempFilename;

    public function getFile()
    {
        return $this->file;
    }

    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
        // check if a file already exists for this entity
        if(null !== $this->extension){
            // save file extension to remove it later
            $this->tempFilename = $this->extension;
            // reinitialization of filename and extension attributes
            $this->extension = null;
            $this->filename = null;
        }
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function PreUpload()
    {
       // if field not compulsory, and no file to upload: do nothing
        if (null === $this->file){
            return;
        }
        // file's name is its ID, we just have to save its extension
        $this->extension = $this->file->guessExtension();
        // generate filename attribute of <img> with original file's name
        $this->filename = $this->file->getClientOriginalName();
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        // if field not compulsory, and no file to upload: do nothing
        if (null === $this->file){
            return;
        }
        // remove an old file if present
        if(null !== $this->tempFilename){
            $oldFile = $thisGetUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
            if(file_exists($oldFile)){
                unlink($oldFile);
            }
        }
        // move the sent file in our chosen directory 
        $this->file->move(
            $this->getUploadRootDir(), // destination directory
            $this->id.'.'.$this->extension   // filename to create (id.extension)
        );   
    }

    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload()
    {
        // save temporarily filename because it relies on the id
        $this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->extension;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        // no access to id, I use the saved name
        if (file_exists($this->tempFilename)){
            // delete the file
            unlink($this->tempFilename);
        }
    }

    public function getUploadDir()
    {
        // return the relative path to the file (relative to /web)
        return 'uploads/img';
    }

    protected function getUploadRootDir()
    {
        // return the relative path to the file for our php code
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    public function getWebPath()
    {
        return $this->getUploadDir().'/'.$this->getId().'.'.$this->getExtension();
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
     * Set extension
     *
     * @param string $extension
     *
     * @return Image
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return Image
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Image
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set galerie
     *
     * @param \Julie\PlatformBundle\Entity\Galerie $galerie
     *
     * @return Image
     */
    public function setGalerie(\Julie\PlatformBundle\Entity\Galerie $galerie)
    {
        $this->galerie = $galerie;

        return $this;
    }

    /**
     * Get galerie
     *
     * @return \Julie\PlatformBundle\Entity\Galerie
     */
    public function getGalerie()
    {
        return $this->galerie;
    }
}
