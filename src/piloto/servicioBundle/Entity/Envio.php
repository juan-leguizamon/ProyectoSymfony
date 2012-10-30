<?php

namespace piloto\servicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * piloto\servicioBundle\Entity\Envio
 *
 * @ORM\Table(name="envio")
 * @ORM\Entity
 */
class Envio
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
     * @var integer $idFormasEnvio
     *
     * @ORM\Column(name="ID_Formas_Envio", type="integer", nullable=false)
     */
    private $idFormasEnvio;

    /**
     * @var integer $idFormulario
     *
     * @ORM\Column(name="ID_Formulario", type="integer", nullable=false)
     */
    private $idFormulario;

    /**
     * @var integer $idEstado
     *
     * @ORM\Column(name="ID_Estado", type="integer", nullable=false)
     */
    private $idEstado;

    /**
     * @var integer $idMensajero
     *
     * @ORM\Column(name="ID_Mensajero", type="integer", nullable=false)
     */
    private $idMensajero;



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
     * Set idFormasEnvio
     *
     * @param integer $idFormasEnvio
     * @return Envio
     */
    public function setIdFormasEnvio($idFormasEnvio)
    {
        $this->idFormasEnvio = $idFormasEnvio;
    
        return $this;
    }

    /**
     * Get idFormasEnvio
     *
     * @return integer 
     */
    public function getIdFormasEnvio()
    {
        return $this->idFormasEnvio;
    }

    /**
     * Set idFormulario
     *
     * @param integer $idFormulario
     * @return Envio
     */
    public function setIdFormulario($idFormulario)
    {
        $this->idFormulario = $idFormulario;
    
        return $this;
    }

    /**
     * Get idFormulario
     *
     * @return integer 
     */
    public function getIdFormulario()
    {
        return $this->idFormulario;
    }

    /**
     * Set idEstado
     *
     * @param integer $idEstado
     * @return Envio
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;
    
        return $this;
    }

    /**
     * Get idEstado
     *
     * @return integer 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set idMensajero
     *
     * @param integer $idMensajero
     * @return Envio
     */
    public function setIdMensajero($idMensajero)
    {
        $this->idMensajero = $idMensajero;
    
        return $this;
    }

    /**
     * Get idMensajero
     *
     * @return integer 
     */
    public function getIdMensajero()
    {
        return $this->idMensajero;
    }
}