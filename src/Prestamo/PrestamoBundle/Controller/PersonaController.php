<?php
namespace Prestamo\PrestamoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Prestamo\PrestamoBundle\Entity\Persona;

/**
 * Description of PersonaController
 *
 * @author Juan Mendoza
 */
class PersonaController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getEntityManager();
        $personas=$em->getRepository('PrestamoBundle:Persona')->findTodasPersonas();
        return $this->render('PrestamoBundle:Persona:index.html.twig', array('personas' => $personas));
    }

  /*  public function personaAction($id)
    {
        $em=$this->getDoctrine()->getEntityManager();
        $personas=$em->getRepository('PrestamoBundle:Persona')->findOneBy(array('id' => $id));
        return $this->render('PrestamoBundle:Persona:persona.html.twig', array('persona' => $personas));

    }*/
}
?>
