<?php

namespace piloto\servicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * piloto\servicioBundle\Entity\FormasPago
 *
 * @ORM\Table(name="formas_pago")
 * @ORM\Entity
 */
class FormasPago
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
     * @var integer $destinatario
     *
     * @ORM\Column(name="Destinatario", type="integer", nullable=true)
     */
    private $destinatario;



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
     * @return FormasPago
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
     * Set destinatario
     *
     * @param integer $destinatario
     * @return FormasPago
     */
    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;
    
        return $this;
    }

    /**
     * Get destinatario
     *
     * @return integer 
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }
}