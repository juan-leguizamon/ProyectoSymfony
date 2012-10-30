<?php

namespace piloto\servicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * piloto\servicioBundle\Entity\Destinatario
 *
 * @ORM\Table(name="destinatario")
 * @ORM\Entity
 */
class Destinatario
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="Nombre", type="string", length=12, nullable=false)
     */
    private $nombre;

    /**
     * @var string $direccion
     *
     * @ORM\Column(name="Direccion", type="string", length=12, nullable=false)
     */
    private $direccion;

    /**
     * @var string $noTelefonico
     *
     * @ORM\Column(name="No_Telefonico", type="string", length=12, nullable=false)
     */
    private $noTelefonico;

    /**
     * @var string $pais
     *
     * @ORM\Column(name="Pais", type="string", length=10, nullable=false)
     */
    private $pais;

    /**
     * @var string $ciudad
     *
     * @ORM\Column(name="Ciudad", type="string", length=10, nullable=false)
     */
    private $ciudad;



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
     * @return Destinatario
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
     * Set direccion
     *
     * @param string $direccion
     * @return Destinatario
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set noTelefonico
     *
     * @param string $noTelefonico
     * @return Destinatario
     */
    public function setNoTelefonico($noTelefonico)
    {
        $this->noTelefonico = $noTelefonico;
    
        return $this;
    }

    /**
     * Get noTelefonico
     *
     * @return string 
     */
    public function getNoTelefonico()
    {
        return $this->noTelefonico;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return Destinatario
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Destinatario
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
}