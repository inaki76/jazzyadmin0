<?php

namespace Yuido\Fractalia\GestorSalasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YuidoFractGestorSalasBundle:Default:index.html.twig', array('name' => $name));
    }
}
