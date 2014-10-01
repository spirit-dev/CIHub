<?php

namespace CIHub\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {
    public function indexAction() {
        $user = $this->getUser();
        return $this->render('CIHubCoreBundle:Default:index.html.twig', array('name' => $user));
    }
}
