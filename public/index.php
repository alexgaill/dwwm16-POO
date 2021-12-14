<?php

use App\Manager\ArticleManager;

define("ROOT", dirname(__DIR__));

require ROOT. "/vendor/autoload.php";

$manager = new ArticleManager();
// $manager->index();
// $manager->single();
$manager->save();