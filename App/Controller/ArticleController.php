<?php
namespace App\Controller;

use App\Entity\Article;
use App\Model\ArticleModel;
use Core\Database\Database;

class ArticleController {


    public function index()
    {
        $model = new ArticleModel();
        $articles = $model->findAll();

        include ROOT."/templates/article/articles.php";
    }

    public function single()
    {

        $model = new ArticleModel();
        $article = $model->find($_GET["id"]);

        include ROOT. "/templates/article/single.php";
    }

    public function save()
    {
        if (!empty($_POST) && isset($_POST["title"]) && isset($_POST["content"])) {

            $article = new Article();
            $article->hydrate($_POST);

            $model = new ArticleModel();
            if ($model->save($_POST)){
                header("Location: index.php?page=save");
            }
        }
        include ROOT."/templates/article/save.php";
    }
}