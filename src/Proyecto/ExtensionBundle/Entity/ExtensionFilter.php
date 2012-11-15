<?php

namespace Proyecto\ExtensionBundle\Entity;

class ExtensionFilter {

    private $id;
    private $areas;

    public function __construct() {
        $this->areas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return ExtensionFilter
     */
    public function setId($id) {
        $this->id = (int) $id;
        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getAreas() {
        return $this->areas;
    }

}
