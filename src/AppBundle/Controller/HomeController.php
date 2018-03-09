<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route(
     *    "/",
     *    name="app.defaultPage"
     * )
     */
    public function redirectAction(Request $request)
    {
        return $this->redirectToRoute('app.homepage');
    }

    /**
     * @Route(
     *    "/accueil",
     *    name="app.homepage"
     * )
     */
    public function indexAction(Request $request)
    {
        return $this->render('index.html.twig');
    }
}
