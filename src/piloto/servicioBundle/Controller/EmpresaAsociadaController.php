<?php

namespace piloto\servicioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use piloto\servicioBundle\Entity\EmpresaAsociada;
use piloto\servicioBundle\Form\EmpresaAsociadaType;

/**
 * EmpresaAsociada controller.
 *
 */
class EmpresaAsociadaController extends Controller
{
    /**
     * Lists all EmpresaAsociada entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('servicioBundle:EmpresaAsociada')->findAll();

        return $this->render('servicioBundle:EmpresaAsociada:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a EmpresaAsociada entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:EmpresaAsociada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EmpresaAsociada entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:EmpresaAsociada:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new EmpresaAsociada entity.
     *
     */
    public function newAction()
    {
        $entity = new EmpresaAsociada();
        $form   = $this->createForm(new EmpresaAsociadaType(), $entity);

        return $this->render('servicioBundle:EmpresaAsociada:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new EmpresaAsociada entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new EmpresaAsociada();
        $form = $this->createForm(new EmpresaAsociadaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('empresaasociada_show', array('id' => $entity->getId())));
        }

        return $this->render('servicioBundle:EmpresaAsociada:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EmpresaAsociada entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:EmpresaAsociada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EmpresaAsociada entity.');
        }

        $editForm = $this->createForm(new EmpresaAsociadaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:EmpresaAsociada:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing EmpresaAsociada entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:EmpresaAsociada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EmpresaAsociada entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EmpresaAsociadaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('empresaasociada_edit', array('id' => $id)));
        }

        return $this->render('servicioBundle:EmpresaAsociada:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a EmpresaAsociada entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('servicioBundle:EmpresaAsociada')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EmpresaAsociada entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('empresaasociada'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
