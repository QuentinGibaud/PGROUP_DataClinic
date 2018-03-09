<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrameController extends Controller
{
    /**
     * @Route("/frame", name="frame")
     */
    public function indexAction(Request $request)
    {
        return $this->render('FormulairePublic.html.twig');
    }
}
