<?php

namespace piloto\servicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * piloto\servicioBundle\Entity\Estado
 *
 * @ORM\Table(name="estado")
 * @ORM\Entity
 */
class Estado
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
     * @var integer $entregado
     *
     * @ORM\Column(name="Entregado", type="integer", nullable=true)
     */
    private $entregado;



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
     * Set entregado
     *
     * @param integer $entregado
     * @return Estado
     */
    public function setEntregado($entregado)
    {
        $this->entregado = $entregado;
    
        return $this;
    }

    /**
     * Get entregado
     *
     * @return integer 
     */
    public function getEntregado()
    {
        return $this->entregado;
    }
}