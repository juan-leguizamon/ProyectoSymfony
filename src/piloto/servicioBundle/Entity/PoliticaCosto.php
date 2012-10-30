<?php

namespace piloto\servicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * piloto\servicioBundle\Entity\PoliticaCosto
 *
 * @ORM\Table(name="politica_costo")
 * @ORM\Entity
 */
class PoliticaCosto
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
     * @var string $tamaño
     *
     * @ORM\Column(name="Tamaño", type="string", length=12, nullable=false)
     */
    private $tamaño;

    /**
     * @var float $peso
     *
     * @ORM\Column(name="Peso", type="float", nullable=false)
     */
    private $peso;

    /**
     * @var float $volumen
     *
     * @ORM\Column(name="Volumen", type="float", nullable=false)
     */
    private $volumen;

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
     * @var integer $cantidad
     *
     * @ORM\Column(name="Cantidad", type="integer", nullable=false)
     */
    private $cantidad;



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
     * Set tamaño
     *
     * @param string $tamaño
     * @return PoliticaCosto
     */
    public function setTamaño($tamaño)
    {
        $this->tamaño = $tamaño;
    
        return $this;
    }

    /**
     * Get tamaño
     *
     * @return string 
     */
    public function getTamaño()
    {
        return $this->tamaño;
    }

    /**
     * Set peso
     *
     * @param float $peso
     * @return PoliticaCosto
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    
        return $this;
    }

    /**
     * Get peso
     *
     * @return float 
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set volumen
     *
     * @param float $volumen
     * @return PoliticaCosto
     */
    public function setVolumen($volumen)
    {
        $this->volumen = $volumen;
    
        return $this;
    }

    /**
     * Get volumen
     *
     * @return float 
     */
    public function getVolumen()
    {
        return $this->volumen;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return PoliticaCosto
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
     * @return PoliticaCosto
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

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return PoliticaCosto
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}