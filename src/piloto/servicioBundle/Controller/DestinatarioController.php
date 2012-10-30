<?php

namespace piloto\servicioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use piloto\servicioBundle\Entity\Destinatario;
use piloto\servicioBundle\Form\DestinatarioType;

/**
 * Destinatario controller.
 *
 */
class DestinatarioController extends Controller
{
    /**
     * Lists all Destinatario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('servicioBundle:Destinatario')->findAll();

        return $this->render('servicioBundle:Destinatario:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Destinatario entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Destinatario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Destinatario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:Destinatario:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Destinatario entity.
     *
     */
    public function newAction()
    {
        $entity = new Destinatario();
        $form   = $this->createForm(new DestinatarioType(), $entity);

        return $this->render('servicioBundle:Destinatario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Destinatario entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Destinatario();
        $form = $this->createForm(new DestinatarioType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('destino_show', array('id' => $entity->getId())));
        }

        return $this->render('servicioBundle:Destinatario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Destinatario entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Destinatario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Destinatario entity.');
        }

        $editForm = $this->createForm(new DestinatarioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:Destinatario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Destinatario entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Destinatario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Destinatario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new DestinatarioType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('destino_edit', array('id' => $id)));
        }

        return $this->render('servicioBundle:Destinatario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Destinatario entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('servicioBundle:Destinatario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Destinatario entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('destino'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
