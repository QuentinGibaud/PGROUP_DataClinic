<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Service\HelloService;

class HelloServiceController extends Controller
{
  /**
  * @Route("/soap")
  */
  public function indexAction(HelloService $helloService)
  {
    $res=$helloService->hello();
    $zip=new \ZipArchive();
    if($zip->open('Archive.zip', \ZipArchive::CREATE) === true)
    {
      foreach ($res as $row) {
        // Ajout direct.
        $zip->addFromString($row['titre_projet'].'_'.$row['nom_inv'].'.txt', $row['resume_projet']);
      }
      // Et on referme l'archive.
      $zip->close();
    }
    else
    {
      echo 'Impossible d&#039;ouvrir &quot;Zip.zip<br/>';
    }
    /**foreach ($res as $row) {
    print $row['titre_projet'];
    print $row['nom_inv'];
    print $row['resume_projet'];
    }
    die;*/
    header('Content-Transfer-Encoding: binary'); //Transfert en binaire (fichier).

    header('Content-Disposition: attachment; filename="Archive.zip"'); //Nom du fichier.

    header('Content-Length: '.filesize('Archive.zip')); //Taille du fichier.



    readfile('Archive.zip');

    return $this->render('form.html.twig');
  }
}
