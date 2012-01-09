<?php

namespace Prestamo\PrestamoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
         $em=$this->getDoctrine()->getEntityManager();
        $personas=$em->getRepository('PrestamoBundle:Persona')->findTodasPersonas();
        return $this->render('PrestamoBundle:Default:index.html.twig', array('personas' => $personas));
    }
}
