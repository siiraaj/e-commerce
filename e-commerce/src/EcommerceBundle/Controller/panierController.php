<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class panierController extends Controller
{
    public function panierAction()
    {
        return $this->render('EcommerceBundle:Default/panier/layout:panier.html.twig');
    }

    public function livraisonAction()
    {
        return $this->render('EcommerceBundle:Default/panier/layout:livraison.html.twig');
    }

    public function validationAction()
    {
        return $this->render('EcommerceBundle:Default/panier/layout:validation.html.twig');
    }
}
