<?php

namespace SimplonV\BusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SimplonVBusBundle:Default:index.html.twig');
    }
}
