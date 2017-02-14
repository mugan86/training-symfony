<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeHelloBundle:Hello:index.html.twig', array('name' => $name));
    }

    public function nameapellidosAction($name, $apellidos)
    {
        return new Response('<html><body>Hello ' . ucfirst($name) . ' ' . ucfirst($apellidos) . '!</body></html>');
    }
}
