<?php

class DbConnect{
    //Declaration des proprietes
    private string $serv;
    private string $db;
    private string $user;
    private string $pswd;
    private ?PDO $dbLink;

    /**
     * DbConnect constructor.
     * @param string $serv
     * @param string $db
     * @param string $user
     * @param string $pswd
     */
    public function __construct(string $serv, string $db, string $user, string $pswd){
        $this->serv = $serv;
        $this->db = $db;
        $this->user = $user;
        $this->pswd = $pswd;
        $this->dbLink = $this->connect();
    }

    /**
     * Connection à la base de données.
     * @return PDO|null
     */
    private function connect(): ?PDO{
        try {
            $bdd = new PDO("mysql:host=$this->serv;dbname=$this->db;charset=utf8", $this->user, $this->pswd);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $exception){
            return null;
        }
        return $bdd;
    }

    /**
     * Retourne l'objet PDO
     */
    public function getDbLink(): ?PDO
    {
        if (is_null($this->dbLink)){
            $this->dbLink = $this->connect();
        }

        return$this->dbLink;
    }
}



