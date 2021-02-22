<?php


class Utilisateurs {

    private ?PDO $db;

    public function getUtilisateurs(){
        $this->db = DbStatic::getLink();
    }

}