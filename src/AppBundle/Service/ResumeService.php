<?php

namespace AppBundle\Service;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ResumeService extends Controller
{

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getResume()
    {
        $host = $this->container->getParameter('database_host');
        $namedb = $this->container->getParameter('database_name');
        $login = $this->container->getParameter('database_user');
        $password = $this->container->getParameter('database_password');
        $conn = new \PDO("mysql:host=".$host.";dbname=".$namedb, $login, $password);
        $query = $conn->prepare("SELECT titre_projet, nom_inv, resume_projet FROM infoform");
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        $query->execute();
        $rows = $query->fetchAll();
        $query->closeCursor();

        return $rows;
    }
}
