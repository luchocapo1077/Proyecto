<?php

namespace Proyecto\ExtensionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto\ExtensionBundle\Entity\Extension
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Proyecto\ExtensionBundle\Entity\ExtensionRepository")
 */
class Extension {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Proyecto", inversedBy="extensiones")
     * @ORM\JoinColumn(name="proyecto_id", referencedColumnName="id")
     * @return integer
     */
    private $proyecto;

    /**
     * @ORM\ManyToOne(targetEntity="Periodo")
     * @ORM\JoinColumn(name="extension_id", referencedColumnName="id")
     * @return integer
     */
    private $periodo;

    /**
     * @ORM\ManyToOne(targetEntity="Lugar")
     * @ORM\JoinColumn(name="extension_id", referencedColumnName="id")
     * @return integer
     */
    private $lugar;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @param \Proyecto\ExtensionBundle\Entity\Proyecto $proyecto
     */
    public function setProyecto(\Proyecto\ExtensionBundle\Entity\Proyecto $proyecto) {
        $this->proyecto = $proyecto;
    }

    /**
     * 
     * @return type
     */
    public function getProyecto() {
        return $this->proyecto;
    }

    /**
     * 
     * @param \Proyecto\ExtensionBundle\Entity\Periodo $periodo
     */
    public function setPeriodo(\Proyecto\ExtensionBundle\Entity\Periodo $periodo) {
        $this->periodo = $periodo;
    }

    /**
     * 
     * @return type
     */
    public function getPeriodo() {
        return $this->periodo;
    }

    /**
     * 
     * @param \Proyecto\ExtensionBundle\Entity\Lugar $lugar
     */
    public function setLugar(\Proyecto\ExtensionBundle\Entity\Lugar $lugar) {
        $this->lugar = $lugar;
    }

    /**
     * 
     * @return type
     */
    public function getLugar() {
        return $this->lugar;
    }

}
