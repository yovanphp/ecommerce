<?php

namespace Pages\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        return $this->render('PageBundle:Default:index.html.twig');
    }
}
