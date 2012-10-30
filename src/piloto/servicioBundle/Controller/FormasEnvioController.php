<?php

namespace piloto\servicioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use piloto\servicioBundle\Entity\FormasEnvio;
use piloto\servicioBundle\Form\FormasEnvioType;

/**
 * FormasEnvio controller.
 *
 */
class FormasEnvioController extends Controller
{
    /**
     * Lists all FormasEnvio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('servicioBundle:FormasEnvio')->findAll();

        return $this->render('servicioBundle:FormasEnvio:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a FormasEnvio entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:FormasEnvio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FormasEnvio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:FormasEnvio:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new FormasEnvio entity.
     *
     */
    public function newAction()
    {
        $entity = new FormasEnvio();
        $form   = $this->createForm(new FormasEnvioType(), $entity);

        return $this->render('servicioBundle:FormasEnvio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new FormasEnvio entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new FormasEnvio();
        $form = $this->createForm(new FormasEnvioType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('formasenvio_show', array('id' => $entity->getId())));
        }

        return $this->render('servicioBundle:FormasEnvio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FormasEnvio entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:FormasEnvio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FormasEnvio entity.');
        }

        $editForm = $this->createForm(new FormasEnvioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:FormasEnvio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing FormasEnvio entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:FormasEnvio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FormasEnvio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FormasEnvioType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('formasenvio_edit', array('id' => $id)));
        }

        return $this->render('servicioBundle:FormasEnvio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a FormasEnvio entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('servicioBundle:FormasEnvio')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FormasEnvio entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('formasenvio'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
