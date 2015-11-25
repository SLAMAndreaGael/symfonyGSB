<?php

namespace SLAM\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SLAMGSBBundle:Default:index.html.twig', array('name' => $name));
    }
}
