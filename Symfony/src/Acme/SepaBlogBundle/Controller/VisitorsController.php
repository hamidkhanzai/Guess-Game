<?php

namespace Acme\SepaBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\SepaBlogBundle\Entity\Visitors;
use Acme\SepaBlogBundle\Form\VisitorsType;

/**
 * Visitors controller.
 *
 */
class VisitorsController extends Controller
{
    /**
     * Lists all Visitors entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AcmeSepaBlogBundle:Visitors')->findAll();

        return $this->render('AcmeSepaBlogBundle:Visitors:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Visitors entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeSepaBlogBundle:Visitors')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Visitors entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeSepaBlogBundle:Visitors:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Visitors entity.
     *
     */
    public function newAction()
    {
        $entity = new Visitors();
        $form   = $this->createForm(new VisitorsType(), $entity);

        return $this->render('AcmeSepaBlogBundle:Visitors:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Visitors entity.
     *
     */
    public function createAction()
    {
        $entity  = new Visitors();
        $request = $this->getRequest();
        $form    = $this->createForm(new VisitorsType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('post_admin_show', array('id' => $entity->getId())));
            
        }

        return $this->render('AcmeSepaBlogBundle:Visitors:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Visitors entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeSepaBlogBundle:Visitors')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Visitors entity.');
        }

        $editForm = $this->createForm(new VisitorsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeSepaBlogBundle:Visitors:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Visitors entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeSepaBlogBundle:Visitors')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Visitors entity.');
        }

        $editForm   = $this->createForm(new VisitorsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('post_admin_edit', array('id' => $id)));
        }

        return $this->render('AcmeSepaBlogBundle:Visitors:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Visitors entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AcmeSepaBlogBundle:Visitors')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Visitors entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('post_admin'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
