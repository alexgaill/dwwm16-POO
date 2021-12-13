<?php
namespace Core\Autoload;
class Autoloader {

    /**
     * Méthode appelée par spl_autoload_register pour charger les class
     * C'est le callback
     *
     * @param string $class
     * @return void
     */
    public static function autoload($class)
    {
        $class = str_replace("\\", "/", $class);
        require ROOT."/$class.php";
    }

    /**
     * Méthode qui charge les class automatiquement.
     *
     * @return void
     */
    public static function register()
    {
        spl_autoload_register(array(__CLASS__, "autoload"));
    }
}