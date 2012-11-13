<?php

namespace Proyecto\ExtensionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Proyecto\ExtensionBundle\Entity\Proyecto;
use Proyecto\ExtensionBundle\Form\ProyectoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ivory\GoogleMapBundle\Model\MapTypeId;
use Ivory\GoogleMapBundle\Model\Controls\ControlPosition;
use Ivory\GoogleMapBundle\Model\Controls\MapTypeControl;
use Ivory\GoogleMapBundle\Model\Controls\MapTypeControlStyle;
use Ivory\GoogleMapBundle\Model\Overlays\Animation;

/**
 * Proyecto controller.
 *
 */
class ProyectoController extends Controller {

    /**
     * Lists all Proyecto entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProyectoExtensionBundle:Proyecto')->findAll();

        return $this->render('ProyectoExtensionBundle:Proyecto:index.html.twig', array(
                    'entities' => $entities,
                ));
    }

    /**
     * Finds and displays a Proyecto entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoExtensionBundle:Proyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proyecto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProyectoExtensionBundle:Proyecto:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new Proyecto entity.
     *
     */
    public function newAction() {
        $entity = new Proyecto();
        $form = $this->createForm(new ProyectoType(), $entity);

        $em = $this->getDoctrine()->getEntityManager();
//-- Obtenemos todas las areas de la tabla
        $areas = $em->getRepository('ProyectoExtensionBundle:Area')->findAll();


        return $this->render('ProyectoExtensionBundle:Proyecto:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                ));
    }

    /**
     * Creates a new Proyecto entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Proyecto();
        $form = $this->createForm(new ProyectoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('proyecto_show', array('id' => $entity->getId())));
        }

        return $this->render('ProyectoExtensionBundle:Proyecto:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                ));
    }

    /**
     * Displays a form to edit an existing Proyecto entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoExtensionBundle:Proyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proyecto entity.');
        }

        $editForm = $this->createForm(new ProyectoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProyectoExtensionBundle:Proyecto:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Edits an existing Proyecto entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoExtensionBundle:Proyecto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Proyecto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProyectoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('proyecto_edit', array('id' => $id)));
        }

        return $this->render('ProyectoExtensionBundle:Proyecto:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Deletes a Proyecto entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProyectoExtensionBundle:Proyecto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Proyecto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('proyecto'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

    /**
     * 
     * @return type
     */
    public function mapAction() {
        /**
         * Requests the ivory google map service
         *
         * @var Ivory\GoogleMapBundle\Model\Map $map
         */
        $map = $this->get('ivory_google_map.map');

        // Requests the ivory google map type control service
        $mapTypeControl = $this->get('ivory_google_map.map_type_control');

        // Add your map type control to the map
        $map->setMapTypeControl($mapTypeControl);

        //obtengo extensiones y armo marker
        $em = $this->getDoctrine()->getManager();
        $extensiones = $em->getRepository('ProyectoExtensionBundle:Extension')->findAll();



        foreach ($extensiones as &$extension) {            
            // Requests the ivory google map marker service
            $marker = $this->get('ivory_google_map.marker');
            // Configure your marker options
            $marker->setPrefixJavascriptVariable('marker_');
            $marker->setAnimation(Animation::DROP);
            $marker->setOption('clickable', false);
            $marker->setOption('flat', true);
            $marker->setOptions(array(
                'clickable' => false,
                'flat' => true
            ));


            //$marker->setPosition(-34.911053181274326, -57.94135111665651, true);
            $marker->setPosition($extension->getLugar()->getLatitud(), $extension->getLugar()->getLongitud(), true);
            // Add your marker to the map
            $map->addMarker($marker);
        }

        return $this->render('ProyectoExtensionBundle:Proyecto:map.html.twig', array(
                    'map' => $map,
                ));
    }

}
