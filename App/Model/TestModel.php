<?php
namespace App\Model;

use App\Model\ArticleModel;

/**
 * Impossible, retourne une fatal error disant que la class testModel ne peut pas hériter 
 * d'une classe définie comme final
 */
class TestModel extends ArticleModel {

}