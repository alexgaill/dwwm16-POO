<?php
namespace Core\Database;

/**
 * Une class abstraite est une class qui a la particularité d'avoir des méthodes abstraites.
 * Une class abstraite ne peut pas être instanciée car les méthodes abstraites ne sont pas définies.
 */
abstract class Database {


    private $host = "localhost:8889";
    private $dbname = "blog";
    private $user = "root";
    private $pwd = "root";
    protected $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new \PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pwd, [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION 
                // Permet de définir l'affichage des erreurs de nos requêtes SQL
            ]);
            $this->pdo->exec("SET NAMES utf8");
        } catch (\PDOException $e) {
            $e->getMessage();
        }
        
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

    /**
     * Une méthode abstraite est une méthode à définir chez les enfants de cette class. 
     * Ce sont des méthodes obligatoires dont on considère l'importance de les implémenter
     * car essentielles au bon fonctionnement d'un module où d'une fonctionnalité par la suite.
     *
     * @return void
     */
    abstract public function findAll();
    abstract public function find($id);
    abstract public function findBy();
    abstract public function findOneBy();

}