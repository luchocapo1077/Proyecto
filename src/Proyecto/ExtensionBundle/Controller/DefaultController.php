<?php

namespace Proyecto\ExtensionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProyectoExtensionBundle:Default:index.html.twig');
    }
}
