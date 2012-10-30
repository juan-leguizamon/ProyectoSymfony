<?php

namespace piloto\servicioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * piloto\servicioBundle\Entity\FormasEnvio
 *
 * @ORM\Table(name="formas_envio")
 * @ORM\Entity
 */
class FormasEnvio
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
     * @var integer $aereo
     *
     * @ORM\Column(name="Aereo", type="integer", nullable=true)
     */
    private $aereo;

    /**
     * @var integer $terrestre
     *
     * @ORM\Column(name="Terrestre", type="integer", nullable=true)
     */
    private $terrestre;



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
     * Set aereo
     *
     * @param integer $aereo
     * @return FormasEnvio
     */
    public function setAereo($aereo)
    {
        $this->aereo = $aereo;
    
        return $this;
    }

    /**
     * Get aereo
     *
     * @return integer 
     */
    public function getAereo()
    {
        return $this->aereo;
    }

    /**
     * Set terrestre
     *
     * @param integer $terrestre
     * @return FormasEnvio
     */
    public function setTerrestre($terrestre)
    {
        $this->terrestre = $terrestre;
    
        return $this;
    }

    /**
     * Get terrestre
     *
     * @return integer 
     */
    public function getTerrestre()
    {
        return $this->terrestre;
    }
}