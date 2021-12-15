<?php
namespace App\Model;

use Core\Database\Database;

class ArticleModel extends Database{

    public function findAll()
    {
        $query = $this->pdo->query("SELECT * FROM article");
        $query->setFetchMode(\PDO::FETCH_CLASS, "App\Entity\Article");
        return $query->fetchAll();
    }

    public function find($id)
    {
        $query = $this->pdo->query("SELECT * FROM article WHERE id = $id");
        $query->setFetchMode(\PDO::FETCH_OBJ);
        return $query->fetch();
    }

    public function save($post)
    {
        $prepare = $this->pdo->prepare("INSERT INTO article (title, content, categorie_id) 
            VALUES (:title, :content, 1)");
        return $prepare->execute($post);
    }
}