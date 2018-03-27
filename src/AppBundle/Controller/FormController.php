<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//Add the route to access the page Demande

class FormController extends Controller
{
    /**
     * @Route(
     *    "/demande",
     *    name="app.request"
     * )
     */
    public function indexAction(Request $request)
    {
        return $this->render('form.html.twig');
    }
}
