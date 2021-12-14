<?php
namespace App\Manager;

use Core\Database\Database;

class ArticleManager {


    public function index()
    {
        $db = new Database;
        $pdo = $db->getPDO();

        $query = $pdo->query("SELECT * FROM article");
        $query->setFetchMode(\PDO::FETCH_OBJ);
        $articles = $query->fetchAll();

        include ROOT."/templates/article/articles.php";
    }

    public function single()
    {
        $db = new Database;
        $pdo = $db->getPDO();

        $query = $pdo->query("SELECT * FROM article WHERE id = ".$_GET["id"]);
        $query->setFetchMode(\PDO::FETCH_OBJ);
        $article = $query->fetch();

        include ROOT. "/templates/article/single.php";
    }
}