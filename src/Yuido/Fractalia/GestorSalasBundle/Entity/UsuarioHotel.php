<?php

namespace Yuido\Fractalia\GestorSalasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioHotel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Yuido\Fractalia\GestorSalasBundle\Entity\UsuarioHotelRepository")
 */
class UsuarioHotel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    
      ////// ASOCIACIONES  //////////
    
     /** 
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="usuariosHoteles")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    protected $usuario;

    /** 
     * @ORM\ManyToOne(targetEntity="Hotel", inversedBy="usuariosHoteles"))
     */
    protected $hotel;
      
    //////// FIN ASOCIACIONES  ////////// 


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
     * Set usuario
     *
     * @param \Yuido\Fractalia\GestorSalasBundle\Entity\Usuario $usuario
     * @return UsuarioHotel
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

    /**
     * Set hotel
     *
     * @param \Yuido\Fractalia\GestorSalasBundle\Entity\Hotel $hotel
     * @return UsuarioHotel
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
}