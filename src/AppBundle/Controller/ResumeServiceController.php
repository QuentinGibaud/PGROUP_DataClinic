<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;
use AppBundle\Service\ResumeService;

class ResumeServiceController extends Controller
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
    * @Route("/resume-projet")
    */
    public function indexAction(ResumeService $resumeService)
    {
          $res=$resumeService->getResume();
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
