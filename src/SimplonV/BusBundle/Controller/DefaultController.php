<?php

namespace SimplonV\BusBundle\Controller;

use SimplonV\BusBundle\Entity\User;
use SimplonV\BusBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = new User();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $form = $this->createForm(new UserType(), $entity);

        return $this->render('SimplonVBusBundle:Default:index.html.twig', array(
            'entity'      => $entity,
            'form'   => $form->createView(),
        ));
    }

    public function connexionAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('SimplonVBusBundle:User')->findOneByEmail($request->get("email"));
        $form = $this->createForm(new UserType(), $entity);

        if ($form->isValid()) {
            if ($entity->getPassword() == $request->get("password"))
            return $this->redirect($this->generateUrl('connexionOK'));
        }

        return $this->render('SimplonVBusBundle:Default:index.html.twig', array(
            'entity'      => $entity,
            'form'   => $form->createView(),
        ));
    }

    public function connexionOkAction()
    {
        return $this->render('SimplonVBusBundle:Default:connexionOK.html.twig');
    }

    public function loginAction(Request $request)
    {
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('SimplonVBusBundle:Default:login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error' => $error,
        ));
    }
}


