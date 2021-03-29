<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render("@Admin/Default/index.html.twig");
    }
    public function layoutAction()
    {
        return $this->render("@Admin//layout.html.twig");
    }
    public function indexxtemplateAction()
    {
        return $this->render("@Admin//template/indexx.html.twig");
    }
    public function widgetsAction()
    {
        return $this->render("@Admin//template/widgets.html.twig");
    }
    public function GestionFAAction()
    {
        return $this->render("@Admin//template/GestionFA.html.twig");
    }
}
