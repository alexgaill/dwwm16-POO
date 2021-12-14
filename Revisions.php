<?php

/**
 * Une class est une représentation d'objets que l'on peut instancier.
 */
class Revision {

    /**
     * Une class possède des propriétés et des méthodes
     * Ces propriétés et méthodes ont une certaine visibilité.
     * 
     * Elles peuvent être public soit accessible de partout
     * ou private, dans ce cas, l'information n'est accessible que dans la class où elle est déclarée
     * ou protected, dans ce cas, l'information est accessible dans la class où elle est déclarée 
     * et dans les class enfants
     */
    public $prop1;
    private $prop2;
    public static $prop3;
    protected $prop4;

    /**
     * Une constante est une information qui ne peut pas changer de valeur
     */
    const CONSTANTE = "Je suis une constante";

    /**
     * Le constructeur d'une class est appelé à l'instanciation. Il permet d'exécuter du code ou d'attribuer des valeurs 
     * aux propriétés afin de pouvoir se servir de l'objet instancier
     *
     * @param [type] $prop1
     * @param [type] $prop2
     */
    public function __construct($prop1, $prop2)
    {
        $this->prop1 = $prop1;
        $this->prop2 = $prop2;
    }

    public function method1()
    {

    }

    /**
     * Un getter permet d'accéder à la valeur d'une information private
     *
     * @return void
     */
    public function getProp2()
    {
        return $this->prop2;
    }

    /**
     * Un setter permet de définir une valeur à une information private
     *
     * @param [type] $prop
     * @return void
     * return void signifie que la fonction n'a pas de return et qu'aucune valeur ne sera retournée
     */
    public function setProp2($prop)
    {
        $this->prop2 = $prop;
    }

    public static function methodStatic()
    {
        // Pour utiliser un élément static dans la class on fait référence à self (self qui est la class)
        // suivi de l'opérateur de portée "::"
        return "Je suis static". self::$prop3;
    }
}

$revision = new Revision("prop1", "prop2"); // On instancie une classe et on lui passe les paramètres attendus 
                                            // par le constructeur

$revision->prop1; // On utilise une propriété de notre objet révision
$revision->getProp2(); // On utilise une méthode de notre objet révision
Revision::methodStatic(); // On utilise une méthode static à partir de la class sans avoir à l'instancier


/**
 * Lorsqu'une class étend une autre class, on dit qu'elle hérite de ses propriétés et méthodes.
 * Elle devient ainsi une class enfant de la classe étendue
 * Ici Revision2 est un enfant de Revision
 */
class Revision2 extends Revision {

    protected $prop4 = "Je suis une propriété protégée";

    public function getProp4()
    {
        return $this->prop4;
    }

}

$revision2 = new Revision2("prop1", "prop2");
$revision2->prop1;
$revision2->getProp2();
Revision2::methodStatic();