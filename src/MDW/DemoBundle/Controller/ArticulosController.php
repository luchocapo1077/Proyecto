<?php

namespace MDW\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MDW\DemoBundle\Entity\Articles;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticulosController
 *
 * @author lucho
 */
class ArticulosController extends Controller {

    public function listarAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $articulos = $em->getRepository('MDWDemoBundle:Articles')->findAll();

        return $this->render('MDWDemoBundle:Articulos:listar.html.twig', array('articulos' => $articulos));
    }

    public function crearAction() {
        $articulo = new Articles();
        $articulo->setTitle('Articulo de ejemplo 1');
        $articulo->setAuthor('John Doe');
        $articulo->setContent('Contenido');
        $articulo->setTags('ejemplo');
        $articulo->setCreated(new \DateTime());
        $articulo->setUpdated(new \DateTime());
        $articulo->setSlug('articulo-de-ejemplo-1');
        $articulo->setCategory('ejemplo');

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($articulo);
        $em->flush();

        return $this->render('MDWDemoBundle:Articulos:articulo.html.twig', array('articulo' => $articulo));
    }

    public function editarAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $articulo = $em->getRepository('MDWDemoBundle:Articles')->find($id);

        $articulo->setTitle('Articulo de ejemplo 1 - modificado');
        $articulo->setUpdated(new \DateTime());

        $em->persist($articulo);
        $em->flush();

        return $this->render('MDWDemoBundle:Articulos:articulo.html.twig', array('articulo' => $articulo));
    }

    public function borrarAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $articulo = $em->getRepository('MDWDemoBundle:Articles')->find($id);

        $em->remove($articulo);
        $em->flush();

        return $this->redirect(
                        $this->generateUrl('articulo_listar')
        );
    }

}