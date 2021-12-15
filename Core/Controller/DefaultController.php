<?php
namespace Core\Controller;

class DefaultController {

    public function render($pathView, $params = [])
    {
        ob_start();
        extract($params);
        require ROOT."/templates/$pathView.php";

        $content = ob_get_clean();
        require ROOT."/templates/base.php";
    }
}