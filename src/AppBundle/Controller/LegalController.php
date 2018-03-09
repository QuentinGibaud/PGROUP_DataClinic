<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LegalController extends Controller
{
    /**
     * @Route(
     *    "/mentions-legales",
     *    name="app.legal"
     * )
     */
    public function indexAction(Request $request)
    {
        return $this->render('legal.html.twig');
    }
}
