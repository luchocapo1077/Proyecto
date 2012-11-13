<?php

namespace Proyecto\ExtensionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto\ExtensionBundle\Entity\Area
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Proyecto\ExtensionBundle\Entity\AreaRepository")
 */
class Area {

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
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Area
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * 
     * @return type
     */
    public function __toString() {
        return $this->nombre;
    }

}
