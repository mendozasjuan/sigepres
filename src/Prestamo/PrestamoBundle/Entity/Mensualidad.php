<?php

namespace Prestamo\PrestamoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestamo\PrestamoBundle\Entity\Mensualidad
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Prestamo\PrestamoBundle\Entity\MensualidadRepository")
 */
class Mensualidad
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
     * @var boolean $cancelo
     *
     * @ORM\Column(name="cancelo", type="boolean")
     */
    private $cancelo;

    /**
     * @var prestamo
     * @ORM\ManyToOne(targetEntity="Prestamo")
     * @ORM\JoinColumn(name="prestamo_id",referencedColumnName="id")
     */
    private $prestamo;

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
     * Set Prestamo
     * @param Prestamo\PrestamoBundle\Entity\Prestamo $prestamo
     */

    public function setPrestamo(\Prestamo\PrestamoBundle\Entity\Prestamo $prestamo)
    {
        $this->prestamo=$prestamo;
    }

    /**
     * Get prestamo
     * @return Prestamo\PrestamoBundle\Entity\Prestamo $prestamo
     */

    public function getPrestamo(){
        return $this->prestamo;
    }
}