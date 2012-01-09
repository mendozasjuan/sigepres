<?php

namespace Prestamo\PrestamoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestamo\PrestamoBundle\Entity\Persona
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Prestamo\PrestamoBundle\Entity\PersonaRepository")
 */
class Persona
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
     * @var string $nacionalidad
     *
     * @ORM\Column(name="nacionalidad", type="string", length=1)
     */
    private $nacionalidad;

    /**
     * @var string $cedula
     *
     * @ORM\Column(name="cedula", type="string", length=8)
     */
    private $cedula;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string $apellidos
     *
     * @ORM\Column(name="apellidos", type="string", length=100)
     */
    private $apellidos;

    /**
     * @var text $direccion
     *
     * @ORM\Column(name="direccion", type="text")
     */
    private $direccion;

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=12)
     */
    private $telefono;

    /**
     *
     * @var parroquia
     * @ORM\ManyToOne(targetEntity="Parroquia")
     * @ORM\JoinColumn(name="parroquia_id",referencedColumnName="id")
     */
    private $parroquia;

    private $prestamos;

    public function __construct(){
        $this->prestamos=new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->getNombre();
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
     * Set nacionalidad
     *
     * @param string $nacionalidad
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;
    }

    /**
     * Get nacionalidad
     *
     * @return string 
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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
     * Set apellidos
     *
     * @param string $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set direccion
     *
     * @param text $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get direccion
     *
     * @return text 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
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
     * Set Parroquia
     * @param Prestamo Prestamo\PrestamoBundle\Entity\Parroquia $parroquia
     */

    public function setParroquia(\Prestamo\PrestamoBundle\Entity\Parroquia $parroquia)
    {
        $this->parroquia=$parroquia;
    }

    /**
     * Get Parroquia
     * @return \Prestamo\PrestamoBundle\Entity\Parroquia $parroquia
     */


    public function getParroquia()
    {
        return $this->parroquia;
    }

    /**
     * Add Prestamo
     * @param \Prestamo\PrestamoBundle\Entity\Prestamo $prestamo
     */
    public function addPrestamos(\Prestamo\PrestamoBundle\Entity\Prestamo $prestamo)
    {
        $this->prestamos[]=$prestamo;
    }

    public function getPrestamos()
    {
        return $this->prestamos;
    }
}