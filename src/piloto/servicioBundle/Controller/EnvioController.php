<?php

namespace piloto\servicioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use piloto\servicioBundle\Entity\Envio;
use piloto\servicioBundle\Form\EnvioType;

/**
 * Envio controller.
 *
 */
class EnvioController extends Controller
{
    /**
     * Lists all Envio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('servicioBundle:Envio')->findAll();

        return $this->render('servicioBundle:Envio:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Envio entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Envio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Envio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:Envio:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Envio entity.
     *
     */
    public function newAction()
    {
        $entity = new Envio();
        $form   = $this->createForm(new EnvioType(), $entity);

        return $this->render('servicioBundle:Envio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Envio entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Envio();
        $form = $this->createForm(new EnvioType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('envio_show', array('id' => $entity->getId())));
        }

        return $this->render('servicioBundle:Envio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Envio entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Envio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Envio entity.');
        }

        $editForm = $this->createForm(new EnvioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:Envio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Envio entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Envio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Envio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EnvioType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('envio_edit', array('id' => $id)));
        }

        return $this->render('servicioBundle:Envio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Envio entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('servicioBundle:Envio')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Envio entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('envio'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
