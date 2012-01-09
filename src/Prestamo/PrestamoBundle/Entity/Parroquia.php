<?php

namespace Prestamo\PrestamoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestamo\PrestamoBundle\Entity\Parroquia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Prestamo\PrestamoBundle\Entity\ParroquiaRepository")
 */
class Parroquia
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
     * @var string $parroquia
     *
     * @ORM\Column(name="parroquia", type="string", length=50)
     */
    private $parroquia;

    /**
     *
     * @var municipio
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumn(name="municipio_id",referencedColumnName="id")
     */
    private $municipio;


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
     * Set parroquia
     *
     * @param string $parroquia
     */
    public function setParroquia($parroquia)
    {
        $this->parroquia = $parroquia;
    }

    /**
     * Get parroquia
     *
     * @return string 
     */
    public function getParroquia()
    {
        return $this->parroquia;
    }

    /**
     * Set Municipio
     * @param Prestamo\PrestamoBundle\Entity\Municipio $municipio
     */

    public function setMunicipio(\Prestamo\PrestamoBundle\Entity\Municipio $municipio)
    {
        $this->municipio=$municipio;
    }
    
    /**
     * Get Municipio
     * @return Prestamo\PrestamoBundle\Entity\Municipio $municipio
     */

    public function getMunicipio()
    {
        return $this->municipio;
    }
}