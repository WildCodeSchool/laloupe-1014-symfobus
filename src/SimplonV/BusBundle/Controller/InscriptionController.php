<?php

namespace SimplonV\BusBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class InscriptionController extends Controller
{
    public function indexAction()
    {
        return $this->render('SimplonVBusBundle:Inscription:index.html.twig');
    }
}
?>