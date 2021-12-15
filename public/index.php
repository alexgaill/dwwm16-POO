<?php

use App\Controller\ArticleController;

define("ROOT", dirname(__DIR__));

require ROOT. "/vendor/autoload.php";

// $manager = new ArticleManager();
// $manager->index();
// $manager->single();
//$manager->save();

if (isset($_GET["page"]) && !empty($_GET["page"])) {
    switch ($_GET["page"]) {
        case 'single':
            $manager = new ArticleController();
            $manager->single();
            break;

        case 'save':
            $manager = new ArticleController();
            $manager->save();
            break;
        
        default:
            $manager = new ArticleController();
            $manager->index();
            break;
    }
} else {
    $manager = new ArticleController();
    $manager->index();
}