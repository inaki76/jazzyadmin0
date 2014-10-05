<?php

namespace Yuido\Fractalia\GestorSalasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reserva
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Yuido\Fractalia\GestorSalasBundle\Entity\ReservaRepository")
 */
class Reserva
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=255)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechainicio", type="datetime")
     */
    private $fechainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafin", type="datetime")
     */
    private $fechafin;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="text")
     */
    private $logo;
    
    
    ////////////  RELACIONES  //////////////
    
    /**
     * @ORM\ManyToOne(targetEntity="Sala")
     */
    protected $sala;
    
     /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     */
    protected $usuario;
    
    ////////////////////////////////////////


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
     * Set cliente
     *
     * @param string $cliente
     * @return Reserva
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Reserva
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return Reserva
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;
    
        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return Reserva
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;
    
        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Reserva
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set sala
     *
     * @param \Yuido\Fractalia\GestorSalasBundle\Entity\Sala $sala
     * @return Reserva
     */
    public function setSala(\Yuido\Fractalia\GestorSalasBundle\Entity\Sala $sala = null)
    {
        $this->sala = $sala;
    
        return $this;
    }

    /**
     * Get sala
     *
     * @return \Yuido\Fractalia\GestorSalasBundle\Entity\Sala 
     */
    public function getSala()
    {
        return $this->sala;
    }

    /**
     * Set usuario
     *
     * @param \Yuido\Fractalia\GestorSalasBundle\Entity\Usuario $usuario
     * @return Reserva
     */
    public function setUsuario(\Yuido\Fractalia\GestorSalasBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Yuido\Fractalia\GestorSalasBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}