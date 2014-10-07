<?php

namespace CIHub\PreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {
    public function indexAction($name) {
        return $this->render('CIHubPreBundle:Default:index.html.twig', array('name' => $name));
    }
}
