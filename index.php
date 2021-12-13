<?php

$numb1 = 2;
$numb2 = 6;
$numb3 = 13;
$numb4 = 22;

echo $numb1 + $numb2;
echo "<br>";
echo $numb3 + $numb4;
echo "<br>";


class MathOperation {

    function addition ($nb1, $nb2)
    {
        return $nb1 + $nb2;
    }
    function soustraction ($nb1, $nb2)
    {
        return $nb1 - $nb2;
    }
    function multiplication ($nb1, $nb2)
    {
        return $nb1 * $nb2;
    }
    function division ($nb1, $nb2)
    {
        return $nb1 / $nb2;
    }
}

$math = new MathOperation();
var_dump($math);
echo "<br>";

echo $math->addition($numb1, $numb3);

// Je charge le fichier contenant MaClass
require "MaClass.php";
// include "MaClass.php";
echo "test";
echo "<br>";

// J'instancie ma class
$maClass = new MaClass();
// J'utilise ses méthodes
echo $maClass->returnPropriete2();
echo "<br>";

echo $maClass->methodWithDefaultValue("Autre valeur que je passe");
echo "<br>";

// J'utilise ses propriétés
// echo $maClass->propriete2;
echo "<br>";

require "Chien.php";

$chien1 = new Chien(3, "Lévrier", "Gris");
$chien2 = new Chien(5, "Chihuahua", "Rose");

var_dump($chien1);
echo "<br>";

var_dump($chien2);
echo "<br>";
echo $chien1->getCouleur();
echo "<br>";
echo $chien2->getCouleur();
$chien2->setCouleur("rose");
echo "<br>";
echo $chien2->getCouleur();
