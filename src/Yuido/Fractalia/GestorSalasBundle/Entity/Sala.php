<?php

namespace Yuido\Fractalia\GestorSalasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sala
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Yuido\Fractalia\GestorSalasBundle\Entity\SalaRepository")
 */
class Sala
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacidad", type="smallint")
     */
    private $capacidad;
    
    
    
    ////////////  RELACIONES  //////////////
    
    /**
     * @ORM\ManyToOne(targetEntity="Hotel")
     */
    protected $hotel;
    
    /**
     * @ORM\OneToMany(targetEntity="Reserva", mappedBy="sala")
     */
    protected $reservas;
    
    ////////////////////////////////////////

    
    public function __construct()
    {
        $this->reservas = new ArrayCollection();
    }
    
    

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
     * Set nombre
     *
     * @param string $nombre
     * @return Sala
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
     * Set capacidad
     *
     * @param integer $capacidad
     * @return Sala
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    
        return $this;
    }

    /**
     * Get capacidad
     *
     * @return integer 
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * Set hotel
     *
     * @param \Yuido\Fractalia\GestorSalasBundle\Entity\Hotel $hotel
     * @return Sala
     */
    public function setHotel(\Yuido\Fractalia\GestorSalasBundle\Entity\Hotel $hotel = null)
    {
        $this->hotel = $hotel;
    
        return $this;
    }

    /**
     * Get hotel
     *
     * @return \Yuido\Fractalia\GestorSalasBundle\Entity\Hotel 
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Add reservas
     *
     * @param \Yuido\Fractalia\GestorSalasBundle\Entity\Reserva $reservas
     * @return Sala
     */
    public function addReserva(\Yuido\Fractalia\GestorSalasBundle\Entity\Reserva $reservas)
    {
        $this->reservas[] = $reservas;
    
        return $this;
    }

    /**
     * Remove reservas
     *
     * @param \Yuido\Fractalia\GestorSalasBundle\Entity\Reserva $reservas
     */
    public function removeReserva(\Yuido\Fractalia\GestorSalasBundle\Entity\Reserva $reservas)
    {
        $this->reservas->removeElement($reservas);
    }

    /**
     * Get reservas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReservas()
    {
        return $this->reservas;
    }
}