<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name=null)
    {
        return $this->render('MainBundle:Default:index.html.twig', ['name' => $name]);
    }
}
