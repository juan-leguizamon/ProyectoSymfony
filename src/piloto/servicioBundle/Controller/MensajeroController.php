<?php

namespace piloto\servicioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use piloto\servicioBundle\Entity\Mensajero;
use piloto\servicioBundle\Form\MensajeroType;

/**
 * Mensajero controller.
 *
 */
class MensajeroController extends Controller
{
    /**
     * Lists all Mensajero entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('servicioBundle:Mensajero')->findAll();

        return $this->render('servicioBundle:Mensajero:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Mensajero entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Mensajero')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mensajero entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:Mensajero:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Mensajero entity.
     *
     */
    public function newAction()
    {
        $entity = new Mensajero();
        $form   = $this->createForm(new MensajeroType(), $entity);

        return $this->render('servicioBundle:Mensajero:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Mensajero entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Mensajero();
        $form = $this->createForm(new MensajeroType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mensajero_show', array('id' => $entity->getId())));
        }

        return $this->render('servicioBundle:Mensajero:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Mensajero entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Mensajero')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mensajero entity.');
        }

        $editForm = $this->createForm(new MensajeroType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:Mensajero:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Mensajero entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Mensajero')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mensajero entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new MensajeroType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mensajero_edit', array('id' => $id)));
        }

        return $this->render('servicioBundle:Mensajero:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Mensajero entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('servicioBundle:Mensajero')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Mensajero entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mensajero'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
