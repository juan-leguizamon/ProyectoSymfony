<?php

namespace piloto\servicioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use piloto\servicioBundle\Entity\Formulario;
use piloto\servicioBundle\Form\FormularioType;

/**
 * Formulario controller.
 *
 */
class FormularioController extends Controller
{
    /**
     * Lists all Formulario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('servicioBundle:Formulario')->findAll();

        return $this->render('servicioBundle:Formulario:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Formulario entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Formulario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formulario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:Formulario:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Formulario entity.
     *
     */
    public function newAction()
    {
        $entity = new Formulario();
        $form   = $this->createForm(new FormularioType(), $entity);

        return $this->render('servicioBundle:Formulario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Formulario entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Formulario();
        $form = $this->createForm(new FormularioType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('formulario_show', array('id' => $entity->getId())));
        }

        return $this->render('servicioBundle:Formulario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Formulario entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Formulario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formulario entity.');
        }

        $editForm = $this->createForm(new FormularioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:Formulario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Formulario entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Formulario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formulario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FormularioType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('formulario_edit', array('id' => $id)));
        }

        return $this->render('servicioBundle:Formulario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Formulario entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('servicioBundle:Formulario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Formulario entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('formulario'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
