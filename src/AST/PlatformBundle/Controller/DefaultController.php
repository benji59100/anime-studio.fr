<?php

namespace AST\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ASTPlatformBundle:Default:index.html.twig');
    }
}
