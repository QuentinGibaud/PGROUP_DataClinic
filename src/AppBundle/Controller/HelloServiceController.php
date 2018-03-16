<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;
use AppBundle\Service\HelloService;

class HelloServiceController extends Controller
{
    /**
     * @var RouterInterface
     */
    private $router;

    public function __construct(
        RouterInterface $router
    ) {
        $this->router = $router;
    }

    /**
    * @Route("/soap")
    */
    public function indexAction(HelloService $helloService)
    {

      /*$correctUser = "GetResume";
      $correctPasswd = "Data@Clinic";
      //On vérifie que la personne a les droits d'accès pour télécharger l'archive Zip
      if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('WWW-Authenticate: Basic realm="Entrez vos identifiants"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Texte utilisé si le visiteur utilise le bouton d\'annulation';
        exit;
      } elseif (($_SERVER['PHP_AUTH_USER'] != $correctUser) || ($_SERVER['PHP_AUTH_PW'] != $correctPasswd)) {
        header('WWW-Authenticate: Basic realm="Vérifiez vos identifiants"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Texte utilisé si le visiteur utilise le bouton d\'annulation';
        exit;
      } else {
        if(($_SERVER['PHP_AUTH_USER'] == $correctUser) && ($_SERVER['PHP_AUTH_PW'] == $correctPasswd)){*/
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

          header('Content-Transfer-Encoding: binary'); //Transfert en binaire (fichier).
          header('Content-Disposition: attachment; filename="Archive.zip"'); //Nom du fichier.
          header('Content-Length: '.filesize('Archive.zip')); //Taille du fichier.
          readfile('Archive.zip');

          /*$content = $this->getFileContent($zip);

          $response = new Response();

          $response->setContent($content);

          $response->headers->set('Content-Transfer-Encoding', 'binary');
          $response->headers->set('Content-Disposition', 'attachment'; filename="Archive.zip");
          $response->headers->set('Content-Length',filesize('Archive.zip'));
          $response->headers->set('Content-Type', "application/force-download");
          $response->headers->set('refresh', "1;".$this->generateUrl('app.homepage'));

          return $response;*/

          //return new RedirectResponse($this->router->generate('app.homepage'));

          return $this->render('index.html.twig');
        /*} else {
          return $this->render('index.html.twig');
        }
      }*/

    }

}
