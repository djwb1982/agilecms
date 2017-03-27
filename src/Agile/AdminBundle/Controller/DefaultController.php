<?php

namespace Agile\AdminBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AgileAdminBundle:Default:index.html.twig');
    }
}
