<?php

namespace piloto\servicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * piloto\servicioBundle\Entity\Facturacion
 *
 * @ORM\Table(name="facturacion")
 * @ORM\Entity
 */
class Facturacion
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
     * @var integer $idEnvio
     *
     * @ORM\Column(name="ID_Envio", type="integer", nullable=false)
     */
    private $idEnvio;

    /**
     * @var string $firmaDestinatario
     *
     * @ORM\Column(name="Firma_Destinatario", type="string", length=12, nullable=false)
     */
    private $firmaDestinatario;

    /**
     * @var string $firmaMensajero
     *
     * @ORM\Column(name="Firma_Mensajero", type="string", length=12, nullable=false)
     */
    private $firmaMensajero;

    /**
     * @var float $costoEnvio
     *
     * @ORM\Column(name="Costo_Envio", type="float", nullable=false)
     */
    private $costoEnvio;



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
     * Set idEnvio
     *
     * @param integer $idEnvio
     * @return Facturacion
     */
    public function setIdEnvio($idEnvio)
    {
        $this->idEnvio = $idEnvio;
    
        return $this;
    }

    /**
     * Get idEnvio
     *
     * @return integer 
     */
    public function getIdEnvio()
    {
        return $this->idEnvio;
    }

    /**
     * Set firmaDestinatario
     *
     * @param string $firmaDestinatario
     * @return Facturacion
     */
    public function setFirmaDestinatario($firmaDestinatario)
    {
        $this->firmaDestinatario = $firmaDestinatario;
    
        return $this;
    }

    /**
     * Get firmaDestinatario
     *
     * @return string 
     */
    public function getFirmaDestinatario()
    {
        return $this->firmaDestinatario;
    }

    /**
     * Set firmaMensajero
     *
     * @param string $firmaMensajero
     * @return Facturacion
     */
    public function setFirmaMensajero($firmaMensajero)
    {
        $this->firmaMensajero = $firmaMensajero;
    
        return $this;
    }

    /**
     * Get firmaMensajero
     *
     * @return string 
     */
    public function getFirmaMensajero()
    {
        return $this->firmaMensajero;
    }

    /**
     * Set costoEnvio
     *
     * @param float $costoEnvio
     * @return Facturacion
     */
    public function setCostoEnvio($costoEnvio)
    {
        $this->costoEnvio = $costoEnvio;
    
        return $this;
    }

    /**
     * Get costoEnvio
     *
     * @return float 
     */
    public function getCostoEnvio()
    {
        return $this->costoEnvio;
    }
}