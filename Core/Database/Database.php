<?php
namespace Core\Database;

class Database {


    private $host = "localhost:8889";
    private $dbname = "blog";
    private $user = "root";
    private $pwd = "root";
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pwd, [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION 
            // Permet de définir l'affichage des erreurs de nos requêtes SQL
        ]);
    }

    /**
     * Retourne la connexion à la BDD
     *
     * @return PDO
     */
    public function getPDO()
    {
        return $this->pdo;
    }

}