<?php

class MaClass {
    // Une class est constituée de propriétés (qui sont des variables) et de méthodes qui sont des fonctions

    private $propriete1;
    private $propriete2 = 12;

    /**
     * La visibilité
     * 
     * La visibilité permet de définir pour une propriété ou une méthode donnée sa portée d'utilisation
     * 
     * Un élément public voit sa portée être générale. On peut donc l'appeler dans la class ou n'importe quel autre
     * élément qui aura instancié cette class.
     * 
     * Un élément private voit sa portée limitée à la class où il est créé. On ne peut donc pas l'utiliser 
     * directement en dehors. Pour ce faire, on doit passer par des moyens détournés comme des méthodes 
     * permettant de lire l'information et de la réécrire
     * 
     * On l'appelle également l'encapsulation
     */

    public function methode1 ()
    {
        return "ok";
    }

    public function methodWithParam ($param)
    {
        return $param;
    }

    public function methodWithDefaultValue ($param = "valeur par défaut")
    {
        return $param;
    }

    public function returnPropriete2 ()
    {
        // $this-> fait référence à l'objet qui va être utilisé 
        // on l'utilise dans la class qui possède les propriétés et les méthodes
        return $this->propriete2;
    }
}