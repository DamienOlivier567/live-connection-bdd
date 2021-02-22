<?php

class Clients {

    private ?PDO $db;

    public function getClients(){
        $this->db = DbStatic::getLink();
    }

}
