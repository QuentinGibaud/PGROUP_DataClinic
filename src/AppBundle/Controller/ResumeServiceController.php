<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
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
          $zipName = 'Resume_Projet_'.date("Y-m-d_H-i-s").'.zip';
          if($zip->open($zipName, \ZipArchive::CREATE) === true)
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

          $response = new Response(readfile($zipName));

          $disposition=$response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, $zipName);
          $response->headers->set('Content-Transfert-Encoding', 'binary');
          $response->headers->set('Content-Type', 'application/zip');
          $response->headers->set('Content-Disposition', $disposition);
          $response->headers->set('Content-Length', filesize($zipName));

          return $this->get('templating')->renderResponse('index.html.twig', array(), $response);

    }

}
