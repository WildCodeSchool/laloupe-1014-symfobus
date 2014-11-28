<?php

namespace SimplonV\BusBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SimplonV\BusBundle\Entity\BusStop;
use SimplonV\BusBundle\Form\BusStopType;

/**
 * BusStop controller.
 *
 */
class BusStopController extends Controller
{

    /**
     * Lists all BusStop entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SimplonVBusBundle:BusStop')->findAll();

        return $this->render('SimplonVBusBundle:BusStop:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new BusStop entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new BusStop();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('busstop_show', array('id' => $entity->getId())));
        }

        return $this->render('SimplonVBusBundle:BusStop:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a BusStop entity.
     *
     * @param BusStop $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(BusStop $entity)
    {
        $form = $this->createForm(new BusStopType(), $entity, array(
            'action' => $this->generateUrl('busstop_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new BusStop entity.
     *
     */
    public function newAction()
    {
        $entity = new BusStop();
        $form   = $this->createCreateForm($entity);

        return $this->render('SimplonVBusBundle:BusStop:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a BusStop entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SimplonVBusBundle:BusStop')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BusStop entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SimplonVBusBundle:BusStop:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing BusStop entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SimplonVBusBundle:BusStop')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BusStop entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SimplonVBusBundle:BusStop:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a BusStop entity.
    *
    * @param BusStop $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(BusStop $entity)
    {
        $form = $this->createForm(new BusStopType(), $entity, array(
            'action' => $this->generateUrl('busstop_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing BusStop entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SimplonVBusBundle:BusStop')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BusStop entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('busstop_edit', array('id' => $id)));
        }

        return $this->render('SimplonVBusBundle:BusStop:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a BusStop entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SimplonVBusBundle:BusStop')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BusStop entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('busstop'));
    }

    /**
     * Creates a form to delete a BusStop entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('busstop_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
