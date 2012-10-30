<?php

namespace piloto\servicioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use piloto\servicioBundle\Entity\Facturacion;
use piloto\servicioBundle\Form\FacturacionType;

/**
 * Facturacion controller.
 *
 */
class FacturacionController extends Controller
{
    /**
     * Lists all Facturacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('servicioBundle:Facturacion')->findAll();

        return $this->render('servicioBundle:Facturacion:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Facturacion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Facturacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Facturacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:Facturacion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Facturacion entity.
     *
     */
    public function newAction()
    {
        $entity = new Facturacion();
        $form   = $this->createForm(new FacturacionType(), $entity);

        return $this->render('servicioBundle:Facturacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Facturacion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Facturacion();
        $form = $this->createForm(new FacturacionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('facturacion_show', array('id' => $entity->getId())));
        }

        return $this->render('servicioBundle:Facturacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Facturacion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Facturacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Facturacion entity.');
        }

        $editForm = $this->createForm(new FacturacionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('servicioBundle:Facturacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Facturacion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('servicioBundle:Facturacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Facturacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FacturacionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('facturacion_edit', array('id' => $id)));
        }

        return $this->render('servicioBundle:Facturacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Facturacion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('servicioBundle:Facturacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Facturacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('facturacion'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
