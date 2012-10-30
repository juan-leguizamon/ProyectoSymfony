<?php

namespace piloto\servicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * piloto\servicioBundle\Entity\Paquete
 *
 * @ORM\Table(name="paquete")
 * @ORM\Entity
 */
class Paquete
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
     * @var integer $telefono
     *
     * @ORM\Column(name="Telefono", type="integer", nullable=false)
     */
    private $telefono;

    /**
     * @var integer $destino
     *
     * @ORM\Column(name="Destino", type="integer", nullable=false)
     */
    private $destino;

    /**
     * @var integer $idPoliticaCosto
     *
     * @ORM\Column(name="ID_Politica_Costo", type="integer", nullable=false)
     */
    private $idPoliticaCosto;



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
     * Set telefono
     *
     * @param integer $telefono
     * @return Paquete
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set destino
     *
     * @param integer $destino
     * @return Paquete
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;
    
        return $this;
    }

    /**
     * Get destino
     *
     * @return integer 
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set idPoliticaCosto
     *
     * @param integer $idPoliticaCosto
     * @return Paquete
     */
    public function setIdPoliticaCosto($idPoliticaCosto)
    {
        $this->idPoliticaCosto = $idPoliticaCosto;
    
        return $this;
    }

    /**
     * Get idPoliticaCosto
     *
     * @return integer 
     */
    public function getIdPoliticaCosto()
    {
        return $this->idPoliticaCosto;
    }
}