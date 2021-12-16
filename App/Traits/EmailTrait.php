<?php
namespace App\Traits;

/**
 * Un trait est comme une class "externe".
 * L'héritage en PHP étant simple (une classe ne peut hériter que d'une seule class), 
 * on peut se retrouver à avoir envie de faire hériter d'une même classe 
 * plusiers classes qui n'ont rien à voir simplement parce qu'une opération sera identique.
 * 
 * Pour palier à ça, un système de trait a été mis en place. Un trait est une classe possédant des propriétés 
 * et des méthodes qui vont être données à une class utilisant le trait ("use Trait")
 * 
 * La classe pour accéder aux informations du trait comme si c'était les siennes $this->methodeDeTrait()
 */
trait EmailTrait {

    public function beautifyTemplate()
    {
        echo "<h1>Je suis un bel email</h1>";
    }
}