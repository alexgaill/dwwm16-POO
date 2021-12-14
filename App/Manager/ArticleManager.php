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

    public function save()
    {
        if (!empty($_POST) && isset($_POST["title"]) && isset($_POST["content"])) {
            $db = new Database();
            $pdo = $db->getPDO();

            $prepare = $pdo->prepare("INSERT INTO article (title, content, categorie_id) 
            VALUES (:title, :content, 1)");
            $prepare->execute($_POST);
        }
        include ROOT."/templates/article/save.php";
    }
}