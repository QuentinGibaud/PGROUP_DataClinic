<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IframeController extends Controller
{
    /**
     * @Route(
     *    "/demande-voozanoo",
     *    name="app.iframeVoozanoo"
     * )
     */
    public function indexAction(Request $request)
    {
        return $this->render('public_form.html.twig');
    }
}
