<?php

namespace piloto\servicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * piloto\servicioBundle\Entity\EmpresaAsociada
 *
 * @ORM\Table(name="empresa_asociada")
 * @ORM\Entity
 */
class EmpresaAsociada
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
     * @var string $nit
     *
     * @ORM\Column(name="Nit", type="string", length=12, nullable=false)
     */
    private $nit;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="Nombre", type="string", length=12, nullable=false)
     */
    private $nombre;

    /**
     * @var string $direccion
     *
     * @ORM\Column(name="Direccion", type="string", length=10, nullable=false)
     */
    private $direccion;

    /**
     * @var string $pais
     *
     * @ORM\Column(name="Pais", type="string", length=10, nullable=false)
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
     * Set nit
     *
     * @param string $nit
     * @return EmpresaAsociada
     */
    public function setNit($nit)
    {
        $this->nit = $nit;
    
        return $this;
    }

    /**
     * Get nit
     *
     * @return string 
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return EmpresaAsociada
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
     * @return EmpresaAsociada
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
     * @return EmpresaAsociada
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
     * @return EmpresaAsociada
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