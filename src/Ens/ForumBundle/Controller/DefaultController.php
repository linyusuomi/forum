<?php

namespace Ens\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EnsForumBundle:Default:index.html.twig', array('name' => $name));
    }
}
