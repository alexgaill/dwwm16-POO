<?php
namespace Core\Interface;

/**
 * Une interface est comme une class entièrement abstraite. 
 * Elle ne contient que des méthodes qui ne peuvent pas être définies ici mais le seront dans les class 
 * qui implémenteront l'interface.
 * 
 * Sur les méthodes on doit définir les paramètres attendus. Si ce n'est pas précisé, 
 * une erreur sera retournée pour mauvaise utilisation de la méthode.
 */
interface UserInterface {

    /**
     * Permet à l'utilisateur de s'inscrire sur le site
     *
     * @return void
     */
    public function signup();

    /**
     * Permet à l'utilisateur de se connecter
     *
     * @return void
     */
    public function login();

    /**
     * Permet à l'utilisateur de se déconnecter
     *
     * @return void
     */
    public function logout();
}