<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($nom)
    {
        return $this->render('EcommerceBundle:Default:index.html.twig',array('nom'=>$nom));
    }
}
