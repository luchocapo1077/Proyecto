<?php

namespace Proyecto\ExtensionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto\ExtensionBundle\Entity\Proyecto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Proyecto\ExtensionBundle\Entity\ProyectoRepository")
 */
class Proyecto
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string $link
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;
    
     /**
     * @ORM\ManyToOne(targetEntity="Area")
     * @ORM\JoinColumn(name="area_id", referencedColumnName="id")
     * @return integer
     */
    private $area;
    
    /**
     * @ORM\OneToMany(targetEntity="Extension", mappedBy="proyecto")
     */
    private $extensiones;

    public function __construct() {
        $this->extensiones = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Proyecto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Proyecto
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }
    
   /**
    * 
    * @param type $area
    * @return \Proyecto\ExtensionBundle\Entity\Proyecto
    */
    public function setArea($area)
    {
        $this->area = $area;
    
        return $this;
    }

   /**
    * 
    * @return type
    */
    public function getArea()
    {
        return $this->area;
    }
    
    /**
     * 
     * @param \Proyecto\ExtensionBundle\Entity\Extension $extensiones
     */
    public function agregarExtension(\Proyecto\ExtensionBundle\Entity\Extension $extensiones) {
        $this->extensiones[] = $extensiones;
    }

    /**
     * 
     * @return type
     */
    public function getExtensiones() {
        return $this->extensiones;
    }
}
