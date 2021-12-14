<?php
namespace App\Manager;

use Core\Database\Database;

class ArticleManager {


    public function index()
    {
        $db = new Database;
        $pdo = $db->getPDO();

        $query = $pdo->query("SELECT * FROM article");
        var_dump($query->fetchAll());
    }
}