<?php

namespace Ecommerce\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontBundle:Product:layout/index.html.twig');
    }

    public function detailsAction($id)
    {
        return $this->render('FrontBundle:Product:layout/details.html.twig', ['id' => $id]);
    }
}
