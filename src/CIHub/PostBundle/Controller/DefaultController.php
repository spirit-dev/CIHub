<?php

namespace CIHub\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CIHubPostBundle:Default:index.html.twig', array('name' => $name));
    }
}
