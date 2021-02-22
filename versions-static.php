<?php

class DbStatic{
    private string $serv = 'localhost';
    private string $db = 'live';
    private string $user = 'root';
    private string $pswd = '';

    private static PDO $dbLink;

    /**
     * DbStatic constructor.
     */
    public function __construct() {
        try {
            self::$dbLink = new PDO("mysql:host=$this->serv;dbname=$this->db;charset=utf8", $this->user, $this->pswd);
            self::$dbLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $exception){
            echo $exception->getMessage();
        }
    }

    /**
     *
     */
    public static function getLink() : ?PDO{
        if (is_null(self::$dbLink)) {
            new self();
        }
        return self::$dbLink;
    }
}