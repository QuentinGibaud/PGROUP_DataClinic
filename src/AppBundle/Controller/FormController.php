<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FormController extends Controller
{
    /**
     * @Route("/form", name="form")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('form.html.twig');
    }
}
