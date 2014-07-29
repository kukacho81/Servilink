<?php

namespace Servilink\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ServilinkHomeBundle:Default:index.html.twig', array('name' => $name));
    }
}
