<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrameController extends Controller
{
    /**
     * @Route("/frame", name="frame")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('FormulairePublic.html.twig');
    }
}