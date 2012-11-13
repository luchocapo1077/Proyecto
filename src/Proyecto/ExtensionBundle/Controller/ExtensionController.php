<?php

namespace Proyecto\ExtensionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Proyecto\ExtensionBundle\Entity\Extension;
use Proyecto\ExtensionBundle\Form\ExtensionType;

/**
 * Extension controller.
 *
 */
class ExtensionController extends Controller
{
    /**
     * Lists all Extension entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProyectoExtensionBundle:Extension')->findAll();

        return $this->render('ProyectoExtensionBundle:Extension:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Extension entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoExtensionBundle:Extension')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Extension entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProyectoExtensionBundle:Extension:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Extension entity.
     *
     */
    public function newAction()
    {
        $entity = new Extension();
        $form   = $this->createForm(new ExtensionType(), $entity);

        return $this->render('ProyectoExtensionBundle:Extension:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Extension entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Extension();
        $form = $this->createForm(new ExtensionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('extension_show', array('id' => $entity->getId())));
        }

        return $this->render('ProyectoExtensionBundle:Extension:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Extension entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoExtensionBundle:Extension')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Extension entity.');
        }

        $editForm = $this->createForm(new ExtensionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProyectoExtensionBundle:Extension:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Extension entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoExtensionBundle:Extension')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Extension entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ExtensionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('extension_edit', array('id' => $id)));
        }

        return $this->render('ProyectoExtensionBundle:Extension:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Extension entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProyectoExtensionBundle:Extension')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Extension entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('extension'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
