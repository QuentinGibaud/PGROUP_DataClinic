<?php

namespace AppBundle\Service;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;

//The service that the CHU can call

class ResumeService extends Controller
{

    public function __construct(ContainerInterface $container)
    {
        //recuperate the data to connect to the database
        $this->container = $container;
    }

    public function getResume()
    {
        //get the parameters needed to connect to the database
        $host = $this->container->getParameter('database_host');
        $namedb = $this->container->getParameter('database_name');
        $login = $this->container->getParameter('database_user');
        $password = $this->container->getParameter('database_password');
        //connect to the database
        $conn = new \PDO("mysql:host=".$host.";dbname=".$namedb, $login, $password);
        //use a prepared statement to cancel SQL injection
        $query = $conn->prepare("SELECT titre_projet, nom_inv, resume_projet,est_publiable FROM infoform");
        //execute the query and return the result
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        $query->execute();
        $rows = $query->fetchAll();
        $query->closeCursor();

        return $rows;
    }
}
