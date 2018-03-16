<?php

namespace AppBundle\Service;

class ResumeService
{
    public function getResume()
    {

        $conn = new \PDO("mysql:host=127.0.0.1;dbname=testform", "root", "");
        $query = $conn->prepare("SELECT titre_projet, nom_inv, resume_projet FROM infoform");
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        $query->execute();
        $rows = $query->fetchAll();
        $query->closeCursor();

        return $rows;
    }
}
