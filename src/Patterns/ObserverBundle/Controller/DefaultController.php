<?php

namespace Patterns\ObserverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PatternsObserverBundle:Default:index.html.twig');
    }
}
