<?php

namespace Prestamo\PrestamoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestamo\PrestamoBundle\Entity\Prestamo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Prestamo\PrestamoBundle\Entity\PrestamoRepository")
 */
class Prestamo
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var date $fecha
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var float $cantidad
     *
     * @ORM\Column(name="cantidad", type="float")
     */
    private $cantidad;

    /**
     * @var integer $porcentaje
     *
     * @ORM\Column(name="porcentaje", type="integer")
     */
    private $porcentaje;

    /**
     * @var boolean $cancelo
     *
     * @ORM\Column(name="cancelo", type="boolean")
     */
    private $cancelo;

    /**
     * @var persona
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumn(name="persona_id",referencedColumnName="id")
     */
    private $persona;

    public function __construct(){
        //$this->persona = new \Doctrine\Common\Collections\ArrayCollection();
        
    }

    public function __toString()
    {
        return $this->getPersona();
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
     * Set fecha
     *
     * @param date $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * Get fecha
     *
     * @return date 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set cantidad
     *
     * @param float $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * Get cantidad
     *
     * @return float 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set porcentaje
     *
     * @param integer $porcentaje
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;
    }

    /**
     * Get porcentaje
     *
     * @return integer 
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * Set cancelo
     *
     * @param boolean $cancelo
     */
    public function setCancelo($cancelo)
    {
        $this->cancelo = $cancelo;
    }

    /**
     * Get cancelo
     *
     * @return boolean 
     */
    public function getCancelo()
    {
        return $this->cancelo;
    }

    /**
     * set Persona
     * @param Prestamo\PrestamoBundle\Entity\Persona $persona
     */

    public function setPersona(\Prestamo\PrestamoBundle\Entity\Persona $persona)
    {
        $this->persona=$persona;
    }

    /**
     * Get Persona
     * @return Prestamo\PrestamoBundle\Entity\Persona $persona
     */

    public function getPersona()
    {
        return $this->persona;
    }

}