<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConnexionCHUController extends Controller
{

    /**
    * @Route("/connexion-chu")
    */
    public function indexAction()
    {
          return $this->render('telecharger.html.twig');
    }

}
