<?php
require_once "Mammifere.php";
class Chien extends Mammifere{


    // protected $type = "Chien";

    public static $type = "Chien";

    public const CATEGORIE = "Animaux";
    /**
     * Cri du chien
     *
     * @return string
     */
    public function aboie():string
    {
        return "Ouaf";
    }

    public static function getType()
    {
        // self fait référence à la classe dans celle-ci
        return self::$type;
    }
}