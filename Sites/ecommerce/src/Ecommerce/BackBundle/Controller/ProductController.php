<?php

namespace Ecommerce\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\CoreBundle\Entity\Product;

class ProductController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('CoreBundle:Product')->findAll();

        if(count($products) === 0) {
            $product = new Product();
            $product->setName('Dell Vostro 1400')
                ->setDescription('Laptop, 2G, 120GB, Intel Centrino, Webcam')
                ->setPrice('9999.99')
                ->setIsAvailable(true)
                ->setCategory('Computers')
                ->setImage('uploads/computers/dell/laptop/vostro_1400.jpg')
                ->setVat('0.11');
            $products [] = $product;
            $em->persist($product);
            $em->flush();
        }

        return $this->render('BackBundle:Product:index.html.twig', ['products' => $products]);
    }

    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('CoreBundle:Product')->findAll();

        return $this->render('BackBundle:Product:index.html.twig', ['products' => $products]);
    }
}
