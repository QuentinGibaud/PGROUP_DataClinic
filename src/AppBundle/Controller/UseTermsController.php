<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//Controller to call the page of the use terms of the site

class UseTermsController extends Controller
{
    /**
     * @Route(
     *    "/cgu",
     *    name="app.use_terms"
     * )
     */
    public function indexAction(Request $request)
    {
        return $this->render('use_terms.html.twig');
    }
}
