<?php

namespace piloto\servicioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use piloto\servicioBundle\Entity\Remitente;
use piloto\servicioBundle\Form\RemitenteType;

/**
 * Remitente controller.
 *
 */
class RemitenteController extends Controller
{
    /**
     * Lists all Remitente entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('servicioBundle:Remitente')->findAll();

        return $this->render('servicioBundle:Remitente:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Remitente entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Remitente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Remitente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:Remitente:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Remitente entity.
     *
     */
    public function newAction()
    {
        $entity = new Remitente();
        $form   = $this->createForm(new RemitenteType(), $entity);

        return $this->render('servicioBundle:Remitente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Remitente entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Remitente();
        $form = $this->createForm(new RemitenteType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('remitente_show', array('id' => $entity->getId())));
        }

        return $this->render('servicioBundle:Remitente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Remitente entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Remitente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Remitente entity.');
        }

        $editForm = $this->createForm(new RemitenteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:Remitente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Remitente entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Remitente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Remitente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new RemitenteType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('remitente_edit', array('id' => $id)));
        }

        return $this->render('servicioBundle:Remitente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Remitente entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('servicioBundle:Remitente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Remitente entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('remitente'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
