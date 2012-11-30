<?php

namespace Proyecto\ExtensionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\Column(type="text", nullable=true)
     */
    private $iconoPath;

    /**
     * @Assert\File(
     *     maxSize = "2000",
     *     mimeTypes = {"image/png"},
     *     mimeTypesMessage = "Please upload a valid PDF"
     * )
     */
    public $icono;

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

    /**
     * Set iconoPath
     *
     * @param string $iconoPath
     * @return Area
     */
    public function setIconoPath($iconoPath) {
        $this->iconoPath = $iconoPath;

        return $this;
    }

    /**
     * Get iconoPath
     *
     * @return string 
     */
    public function getIconoPath() {
        return $this->iconoPath;
    }

    public function uploadIcono() {
        $mypath = unserialize($this->iconoPath);

        $value = $this->icono;

        if ($value) {

            //Definir un nombre valido para el archivo
            //Gedmo es una de las extensiones de Doctrine para Sluggable, Timestampable, etc
            //$nombre = \Gedmo\Sluggable\Util\Urlizer::urlize($value->getClientOriginalName(), '-');
           // $nombre = $value->getClientOriginalName();

            //Verificar la extension para guardar la imagen
//            $extension = $value->guessExtension();

//            $extvalidas = array('JPG', 'JPEG', 'PNG', 'GIF');
//
//            if (!in_array(strtoupper($extension), $extvalidas)) {
//                return;
//            }

            //Quitar la extension del nombre generado
            //caso contrario el nombre queda algo como:  miimagen-jpg
            //$nombre = str_replace('-' . $extension, '', $nombre);

            //Nombre final con extension
            //Queda algo como: miimagen.jpg
            //$nombreFinal = $nombre . '.' . $extension;
            $nombreFinal = $value->getClientOriginalName();

            //Almacenar la imagen en el servidor
            $value->move($this->getUploadRootDir(), $nombreFinal);

            //guardo el nombre final
            $mypath = $nombreFinal;
        }
        $this->iconoPath = serialize($mypath);
        $this->icono = null;
    }
    
    public function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    public function getUploadDir()
    {
        return 'uploads/markerIconos';
    }
    
    public function serialize()
    {
        return serialize($this->getPath());
    }
    
    public function unserialize($data)
    {
        $this->path = unserialize($data);
    }

}
