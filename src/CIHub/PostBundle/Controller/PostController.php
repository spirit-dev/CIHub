<?php

namespace CIHub\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $projects = $em->getRepository('CIHubCoreBundle:Project')->findAll();
        $user = $this->getUser();
        return $this->render('@CIHubPost/Default/index.html.twig', array(
            'name' => $user,
            'projects' => $projects
        ));
    }
}
