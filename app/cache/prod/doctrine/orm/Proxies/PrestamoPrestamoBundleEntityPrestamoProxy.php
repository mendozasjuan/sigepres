<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class PrestamoPrestamoBundleEntityPrestamoProxy extends \Prestamo\PrestamoBundle\Entity\Prestamo implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setFecha($fecha)
    {
        $this->__load();
        return parent::setFecha($fecha);
    }

    public function getFecha()
    {
        $this->__load();
        return parent::getFecha();
    }

    public function setCantidad($cantidad)
    {
        $this->__load();
        return parent::setCantidad($cantidad);
    }

    public function getCantidad()
    {
        $this->__load();
        return parent::getCantidad();
    }

    public function setPorcentaje($porcentaje)
    {
        $this->__load();
        return parent::setPorcentaje($porcentaje);
    }

    public function getPorcentaje()
    {
        $this->__load();
        return parent::getPorcentaje();
    }

    public function setCancelo($cancelo)
    {
        $this->__load();
        return parent::setCancelo($cancelo);
    }

    public function getCancelo()
    {
        $this->__load();
        return parent::getCancelo();
    }

    public function setPersona(\Prestamo\PrestamoBundle\Entity\Persona $persona)
    {
        $this->__load();
        return parent::setPersona($persona);
    }

    public function getPersona()
    {
        $this->__load();
        return parent::getPersona();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'fecha', 'cantidad', 'porcentaje', 'cancelo', 'persona');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}