<?php

namespace Julie\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use symfony\Component\Validator\Constraints as Assert;

/**
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

    
    private $file;

    private $tempFilename;

    public function getFile()
    {
        return $this->file;
    }

    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
        // check if a file already exists for this entity
        if(null !== $this->url){
            // save file extension to remove it later
            $this->tempFilename = $this->url;
            // reinitialization of alt and url attributes
            $this->url = null;
            $this->alt = null;
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
        // file's name is tis ID, we just have to save its extension
        $this->url = $this->file->guessExtension();
        // generate alt attribute of <img> with original file's name
        $this->alt = $this->file->getClientOriginalName();
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
        // move the sent file in ou chosen directory
        $this->file->move(
            $this->getUploadRootDir(), // destination directory
            $this->id.'.'.$this->url   // filename to create (id.extension)
            );
    }

    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload()
    {
        // save temporarily filename because it relies on the id
        $this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
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
        return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
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
     * Set url
     *
     * @param string $url
     *
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }
}
