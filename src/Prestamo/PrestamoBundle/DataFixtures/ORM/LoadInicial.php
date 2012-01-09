<?php
namespace Prestamo\PrestamoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Prestamo\PrestamoBundle\Entity\Mensualidad,
    Prestamo\PrestamoBundle\Entity\Municipio,
    Prestamo\PrestamoBundle\Entity\Parroquia,
    Prestamo\PrestamoBundle\Entity\Persona,
    Prestamo\PrestamoBundle\Entity\Prestamo,
    Prestamo\PrestamoBundle\Entity\Usuario;

/**
 * Description of LoadInicial
 *
 * @author Juan
 */
class LoadInicial extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {
    //put your code here
    protected $manager;
    private   $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}
?>
