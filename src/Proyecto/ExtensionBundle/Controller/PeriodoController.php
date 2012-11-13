<?php

namespace Proyecto\ExtensionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Proyecto\ExtensionBundle\Entity\Periodo;
use Proyecto\ExtensionBundle\Form\PeriodoType;

/**
 * Periodo controller.
 *
 */
class PeriodoController extends Controller
{
    /**
     * Lists all Periodo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProyectoExtensionBundle:Periodo')->findAll();

        return $this->render('ProyectoExtensionBundle:Periodo:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Periodo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoExtensionBundle:Periodo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Periodo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProyectoExtensionBundle:Periodo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Periodo entity.
     *
     */
    public function newAction()
    {
        $entity = new Periodo();
        $form   = $this->createForm(new PeriodoType(), $entity);

        return $this->render('ProyectoExtensionBundle:Periodo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Periodo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Periodo();
        $form = $this->createForm(new PeriodoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('periodo_show', array('id' => $entity->getId())));
        }

        return $this->render('ProyectoExtensionBundle:Periodo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Periodo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoExtensionBundle:Periodo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Periodo entity.');
        }

        $editForm = $this->createForm(new PeriodoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProyectoExtensionBundle:Periodo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Periodo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProyectoExtensionBundle:Periodo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Periodo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PeriodoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('periodo_edit', array('id' => $id)));
        }

        return $this->render('ProyectoExtensionBundle:Periodo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Periodo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProyectoExtensionBundle:Periodo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Periodo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('periodo'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
