<?php
namespace Prestamo\PrestamoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Prestamo\PrestamoBundle\Entity\Prestamo;
use Prestamo\PrestamoBundle\Form\PrestamoType;

class PrestamoController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getEntityManager();
        $prestamos=$em->getRepository('PrestamoBundle:Prestamo')->findTodosPrestamos();
        return $this->render('PrestamoBundle:Prestamo:index.html.twig', array('prestamo' => $prestamos));
        
    }

    public function prestamoAction($persona_id)
    {
        $em=$this->getDoctrine()->getEntityManager();
        $prestamos=$em->getRepository('PrestamoBundle:Prestamo')->findBy(array('persona' => $persona_id));
        return $this->render('PrestamoBundle:Prestamo:index.html.twig', array('prestamo' => $prestamos));

    }

    public function newAction()
    {
        $peticion = $this->get('request');
        $em = $this->getDoctrine()->getEntityManager();
        $prestamo= new Prestamo();
        $prestamo->setFecha(new \DateTime('now'));

        $formulario= $this->get('form.factory')->create(new PrestamoType());
        $formulario->setData($prestamo);

        if($peticion->getMethod() == 'POST'){
            $formulario->bindRequest($peticion);

            if ($formulario->isValid()) {
                $em->persist($prestamo);
                $em->flush();

                $peticion->getSession()->setFlash('notice', 'Se ha creado correctamente la ponencia');

                return $this->redirect($this->generateUrl('persona'));
            }

          
        }
          return $this->render('PrestamoBundle:Prestamo:new.html.twig', array(
            'formulario' => $formulario->createView()
        ));


    }



}