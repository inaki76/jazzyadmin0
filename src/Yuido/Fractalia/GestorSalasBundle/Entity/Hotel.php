<?php

namespace Yuido\Fractalia\GestorSalasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Yuido\Fractalia\GestorSalasBundle\Entity\HotelRepository")
 */
class Hotel
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
     * @var string
     *
     * @ORM\Column(name="dir", type="string", length=255)
     */
    private $dir;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    
    
    ////////////  RELACIONES  //////////////
    
    /**
     * @ORM\OneToMany(targetEntity="Sala", mappedBy="hotel")
     */
    protected $salas;
    
    
    /**
    * @ORM\OneToMany(targetEntity="UsuarioHotel", mappedBy="hotel")
    */
    protected $usuariosHoteles;
    
    ////////////////////////////////////////
    
    public function __construct()
    {
        $this->salas = new ArrayCollection();
        $this->usuariosHoteles = new ArrayCollection();
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
     * @return Hotel
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
     * Set dir
     *
     * @param string $dir
     * @return Hotel
     */
    public function setDir($dir)
    {
        $this->dir = $dir;
    
        return $this;
    }

    /**
     * Get dir
     *
     * @return string 
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Hotel
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Hotel
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Add salas
     *
     * @param \Yuido\Fractalia\GestorSalasBundle\Entity\Sala $salas
     * @return Hotel
     */
    public function addSala(\Yuido\Fractalia\GestorSalasBundle\Entity\Sala $salas)
    {
        $this->salas[] = $salas;
    
        return $this;
    }

    /**
     * Remove salas
     *
     * @param \Yuido\Fractalia\GestorSalasBundle\Entity\Sala $salas
     */
    public function removeSala(\Yuido\Fractalia\GestorSalasBundle\Entity\Sala $salas)
    {
        $this->salas->removeElement($salas);
    }

    /**
     * Get salas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSalas()
    {
        return $this->salas;
    }

    /**
     * Add usuariosHoteles
     *
     * @param \Yuido\Fractalia\GestorSalasBundle\Entity\UsuarioHotel $usuariosHoteles
     * @return Hotel
     */
    public function addUsuariosHotele(\Yuido\Fractalia\GestorSalasBundle\Entity\UsuarioHotel $usuariosHoteles)
    {
        $this->usuariosHoteles[] = $usuariosHoteles;
    
        return $this;
    }

    /**
     * Remove usuariosHoteles
     *
     * @param \Yuido\Fractalia\GestorSalasBundle\Entity\UsuarioHotel $usuariosHoteles
     */
    public function removeUsuariosHotele(\Yuido\Fractalia\GestorSalasBundle\Entity\UsuarioHotel $usuariosHoteles)
    {
        $this->usuariosHoteles->removeElement($usuariosHoteles);
    }

    /**
     * Get usuariosHoteles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuariosHoteles()
    {
        return $this->usuariosHoteles;
    }
}