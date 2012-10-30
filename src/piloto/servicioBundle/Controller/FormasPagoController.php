<?php

namespace piloto\servicioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use piloto\servicioBundle\Entity\FormasPago;
use piloto\servicioBundle\Form\FormasPagoType;

/**
 * FormasPago controller.
 *
 */
class FormasPagoController extends Controller
{
    /**
     * Lists all FormasPago entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('servicioBundle:FormasPago')->findAll();

        return $this->render('servicioBundle:FormasPago:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a FormasPago entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:FormasPago')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FormasPago entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:FormasPago:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new FormasPago entity.
     *
     */
    public function newAction()
    {
        $entity = new FormasPago();
        $form   = $this->createForm(new FormasPagoType(), $entity);

        return $this->render('servicioBundle:FormasPago:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new FormasPago entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new FormasPago();
        $form = $this->createForm(new FormasPagoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('formaspago_show', array('id' => $entity->getId())));
        }

        return $this->render('servicioBundle:FormasPago:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FormasPago entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:FormasPago')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FormasPago entity.');
        }

        $editForm = $this->createForm(new FormasPagoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:FormasPago:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing FormasPago entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:FormasPago')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FormasPago entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FormasPagoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('formaspago_edit', array('id' => $id)));
        }

        return $this->render('servicioBundle:FormasPago:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a FormasPago entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('servicioBundle:FormasPago')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FormasPago entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('formaspago'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
