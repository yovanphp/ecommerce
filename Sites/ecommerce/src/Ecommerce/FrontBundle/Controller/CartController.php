<?php

namespace Ecommerce\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CartController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontBundle:Cart:layout/index.html.twig');
    }

    public function deliveryAction()
    {
        return $this->render('FrontBundle:Cart:layout/delivery.html.twig');
    }

    public function validationAction()
    {
        return $this->render('FrontBundle:Cart:layout/validation.html.twig');
    }
}
