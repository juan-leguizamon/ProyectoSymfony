<?php

namespace piloto\servicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * piloto\servicioBundle\Entity\Remitente
 *
 * @ORM\Table(name="remitente")
 * @ORM\Entity
 */
class Remitente
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
     * @var integer $remitente
     *
     * @ORM\Column(name="Remitente", type="integer", nullable=true)
     */
    private $remitente;

    /**
     * @var integer $empresaAsociada
     *
     * @ORM\Column(name="Empresa Asociada", type="integer", nullable=true)
     */
    private $empresaAsociada;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="Nombre", type="string", length=12, nullable=false)
     */
    private $nombre;

    /**
     * @var integer $cedula
     *
     * @ORM\Column(name="Cedula", type="integer", nullable=false)
     */
    private $cedula;

    /**
     * @var string $direccion
     *
     * @ORM\Column(name="Direccion", type="string", length=10, nullable=false)
     */
    private $direccion;

    /**
     * @var string $pais
     *
     * @ORM\Column(name="Pais", type="string", length=12, nullable=false)
     */
    private $pais;

    /**
     * @var string $ciudad
     *
     * @ORM\Column(name="Ciudad", type="string", length=12, nullable=false)
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
     * Set remitente
     *
     * @param integer $remitente
     * @return Remitente
     */
    public function setRemitente($remitente)
    {
        $this->remitente = $remitente;
    
        return $this;
    }

    /**
     * Get remitente
     *
     * @return integer 
     */
    public function getRemitente()
    {
        return $this->remitente;
    }

    /**
     * Set empresaAsociada
     *
     * @param integer $empresaAsociada
     * @return Remitente
     */
    public function setEmpresaAsociada($empresaAsociada)
    {
        $this->empresaAsociada = $empresaAsociada;
    
        return $this;
    }

    /**
     * Get empresaAsociada
     *
     * @return integer 
     */
    public function getEmpresaAsociada()
    {
        return $this->empresaAsociada;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Remitente
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
     * Set cedula
     *
     * @param integer $cedula
     * @return Remitente
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    
        return $this;
    }

    /**
     * Get cedula
     *
     * @return integer 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Remitente
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
     * Set pais
     *
     * @param string $pais
     * @return Remitente
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
     * @return Remitente
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