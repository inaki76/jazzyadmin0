<?php

namespace Yuido\Fractalia\GestorSalasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Yuido\Fractalia\GestorSalasBundle\Entity\UsuarioRepository")
 */
class Usuario
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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;
    
    
    ///////////////  RELACIONES  ///////////
    
    /**
    * @ORM\OneToMany(targetEntity="UsuarioHotel", mappedBy="usuario")
    */
    protected $usuariosHoteles;
    
    /**
     * @ORM\OneToMany(targetEntity="Reserva", mappedBy="usuario")
     */
    protected $reservas;
    
    //////////// FIN RELACIONES  //////////
    
    public function __construct()
    {
        $this->reservas = new ArrayCollection();
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
     * @return Usuario
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
     * Set email
     *
     * @param string $email
     * @return Usuario
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
     * Add usuariosHoteles
     *
     * @param \Yuido\Fractalia\GestorSalasBundle\Entity\UsuarioHotel $usuariosHoteles
     * @return Usuario
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

    /**
     * Add reservas
     *
     * @param \Yuido\Fractalia\GestorSalasBundle\Entity\Reserva $reservas
     * @return Usuario
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