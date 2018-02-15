<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/", name="defaultpage")
     */
    public function redirectAction(Request $request)
    {
        return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/home", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('index.html.twig');
    }
}
