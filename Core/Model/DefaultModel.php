<?php
namespace Core\Model;

use Core\Database\Database;

class DefaultModel extends Database {

    protected $table;

    public function findAll()
    {
        try {
            if (empty($this->table)) {
                throw new \Exception("Erreur: La table n'a pas été définie", 400);
            }
            $query = $this->pdo->query("SELECT * FROM $this->table");
            $query->setFetchMode(\PDO::FETCH_CLASS, "App\Entity\\". ucfirst($this->table));
            $result = $query->fetchAll();
            if (is_bool($result)) {
                throw new \Exception("Erreur: Les données n'ont pas été récupérées", 400);
            }
            return $result;
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
        
    }

    public function find($id)
    {
        $query = $this->pdo->query("SELECT * FROM $this->table WHERE id = $id");
        $query->setFetchMode(\PDO::FETCH_CLASS, "App\Entity\\". ucfirst($this->table));
        return $query->fetch();
    }

    public function findBy()
    {
        
    }

    public function findOneBy()
    {
        
    }
}