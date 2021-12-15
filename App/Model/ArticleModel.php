<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method array findAll()
 * @method Article find($id)
 */
class ArticleModel extends DefaultModel{

    protected $table = "article";

    public function save($post)
    {
        $prepare = $this->pdo->prepare("INSERT INTO article (title, content, categorie_id) 
            VALUES (:title, :content, 1)");
        return $prepare->execute($post);
    }
}