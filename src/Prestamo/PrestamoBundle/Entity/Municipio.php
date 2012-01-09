<?php

namespace Prestamo\PrestamoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestamo\PrestamoBundle\Entity\Municipio
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Prestamo\PrestamoBundle\Entity\MunicipioRepository")
 */
class Municipio
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
     * @var string $municipio
     *
     * @ORM\Column(name="municipio", type="string", length=50)
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
     * Set municipio
     *
     * @param string $municipio
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    /**
     * Get municipio
     *
     * @return string 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }
}