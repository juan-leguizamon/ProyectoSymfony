<?php

namespace piloto\servicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * piloto\servicioBundle\Entity\Formulario
 *
 * @ORM\Table(name="formulario")
 * @ORM\Entity
 */
class Formulario
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
     * @var integer $idDestinatario
     *
     * @ORM\Column(name="ID_Destinatario", type="integer", nullable=false)
     */
    private $idDestinatario;

    /**
     * @var integer $idRemitente
     *
     * @ORM\Column(name="ID_Remitente", type="integer", nullable=false)
     */
    private $idRemitente;

    /**
     * @var integer $idFormaPago
     *
     * @ORM\Column(name="ID_Forma_Pago", type="integer", nullable=false)
     */
    private $idFormaPago;

    /**
     * @var integer $idPaquete
     *
     * @ORM\Column(name="ID_Paquete", type="integer", nullable=false)
     */
    private $idPaquete;



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
     * Set idDestinatario
     *
     * @param integer $idDestinatario
     * @return Formulario
     */
    public function setIdDestinatario($idDestinatario)
    {
        $this->idDestinatario = $idDestinatario;
    
        return $this;
    }

    /**
     * Get idDestinatario
     *
     * @return integer 
     */
    public function getIdDestinatario()
    {
        return $this->idDestinatario;
    }

    /**
     * Set idRemitente
     *
     * @param integer $idRemitente
     * @return Formulario
     */
    public function setIdRemitente($idRemitente)
    {
        $this->idRemitente = $idRemitente;
    
        return $this;
    }

    /**
     * Get idRemitente
     *
     * @return integer 
     */
    public function getIdRemitente()
    {
        return $this->idRemitente;
    }

    /**
     * Set idFormaPago
     *
     * @param integer $idFormaPago
     * @return Formulario
     */
    public function setIdFormaPago($idFormaPago)
    {
        $this->idFormaPago = $idFormaPago;
    
        return $this;
    }

    /**
     * Get idFormaPago
     *
     * @return integer 
     */
    public function getIdFormaPago()
    {
        return $this->idFormaPago;
    }

    /**
     * Set idPaquete
     *
     * @param integer $idPaquete
     * @return Formulario
     */
    public function setIdPaquete($idPaquete)
    {
        $this->idPaquete = $idPaquete;
    
        return $this;
    }

    /**
     * Get idPaquete
     *
     * @return integer 
     */
    public function getIdPaquete()
    {
        return $this->idPaquete;
    }
}