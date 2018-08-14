<?php

namespace EcommerceBundle\Controller;

use EcommerceBundle\Entity\Produits;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class testController extends Controller
{
    public function ajouterAction()
    {

        $em = $this->getDoctrine()->getManager();
        $produits =$em->getRepository('EcommerceBundle:Produits')->findAll();

        return $this->render('EcommerceBundle:Default/produit/layout:test.html.twig',array('produits'=>$produits));

    }
}
