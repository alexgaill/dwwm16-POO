<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method array findAll()
 * @method Categorie find($id)
 */
class CategorieModel extends DefaultModel{

    protected $table = "categorie";
}