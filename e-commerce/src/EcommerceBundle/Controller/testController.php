<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class testController extends Controller
{
    public function ajouterAction()
    {
        return $this->render('EcommerceBundle:Default/panier/layout:panier.html.twig');
    }
}
