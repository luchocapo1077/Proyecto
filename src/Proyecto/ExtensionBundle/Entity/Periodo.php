<?php

namespace Proyecto\ExtensionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto\ExtensionBundle\Entity\Periodo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Proyecto\ExtensionBundle\Entity\PeriodoRepository")
 */
class Periodo
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
     * @var \DateTime $fechaDesde
     *
     * @ORM\Column(name="fechaDesde", type="date")
     */
    private $fechaDesde;

    /**
     * @var \DateTime $fechaHasta
     *
     * @ORM\Column(name="fechaHasta", type="date", nullable=true)
     */
    private $fechaHasta; 


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
     * Set fechaDesde
     *
     * @param \DateTime $fechaDesde
     * @return Periodo
     */
    public function setFechaDesde($fechaDesde)
    {
        $this->fechaDesde = $fechaDesde;
    
        return $this;
    }

    /**
     * Get fechaDesde
     *
     * @return \DateTime 
     */
    public function getFechaDesde()
    {
        return $this->fechaDesde;
    }

    /**
     * Set fechaHasta
     *
     * @param \DateTime $fechaHasta
     * @return Periodo
     */
    public function setFechaHasta($fechaHasta)
    {
        $this->fechaHasta = $fechaHasta;
    
        return $this;
    }

    /**
     * Get fechaHasta
     *
     * @return \DateTime 
     */
    public function getFechaHasta()
    {
        return $this->fechaHasta;
    }
    
    /**
     * 
     * @return type
     */
    public function __toString() {
        $fechas = $this->getFechaDesde()->format('d-m-Y');
        if($this->getFechaHasta()){
            $fechas= $fechas .' - ' . $this->getFechaHasta()->format('d-m-Y');
        }
        return $fechas; 
    }
}
