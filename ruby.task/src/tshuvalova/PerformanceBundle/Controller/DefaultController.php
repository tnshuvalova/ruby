<?php

namespace tshuvalova\PerformanceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('tshuvalovaPerformanceBundle:Default:index.html.twig', array('name' => $name));
    }
}
