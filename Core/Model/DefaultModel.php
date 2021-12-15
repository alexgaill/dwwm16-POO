<?php
namespace Core\Model;

use Core\Database\Database;

class DefaultModel extends Database {

    protected $table;

    public function findAll()
    {
        $query = $this->pdo->query("SELECT * FROM $this->table");
        $query->setFetchMode(\PDO::FETCH_CLASS, "App\Entity\\". ucfirst($this->table));
        return $query->fetchAll();
    }

    public function find($id)
    {
        $query = $this->pdo->query("SELECT * FROM $this->table WHERE id = $id");
        $query->setFetchMode(\PDO::FETCH_CLASS, "App\Entity\\". ucfirst($this->table));
        return $query->fetch();
    }
}