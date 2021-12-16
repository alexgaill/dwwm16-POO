<?php
namespace Core\Controller;

class DefaultController {

    public function render($pathView, $params = [])
    {
        // ob_start démarre une mémoire tampon qui va permettre de stocker tout ce qu'il y a à la suite
        ob_start();
        // Dans un premier temps, on met nos variables en mémoires tampon pour pouvoir les utiliser sur le 
        // template qu'on va charger
        extract($params);
        // Ensuite on stocke le template à charger et à insérer dans notre template de base pour avoir 
        // notre page entière
        require ROOT."/templates/$pathView.php";

        // ob_get_clean c'est une fonction qui mélange 2 fonction: ob_get_contents qui récupère le contenu
        // de la mémoire tampon et le stocke dans la variable $content
        // et ob_end_clean qui vide la mémoire tampon
        $content = ob_get_clean();
        require ROOT."/templates/base.php";
    }
}