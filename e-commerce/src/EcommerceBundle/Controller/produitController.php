<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class produitController extends Controller
{
    public function produitAction()
    {
        return $this->render('EcommerceBundle:Default:index.html.twig');
    }
    public function presentationAction()
    {
        return $this->render('EcommerceBundle:Default:index.html.twig');
    }
}
