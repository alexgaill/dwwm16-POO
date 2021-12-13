<?php

class Chien {

    /**
     * Age du chien
     *
     * @var int
     */
    private $age;

    /**
     * race du chien
     *
     * @var string
     */
    private $race;

    /**
     * Couleur du chien
     *
     * @var string
     */
    private $couleur;

    /**
     * Constructeur du chien permettant de définir les informations par défaut du chien à l'instanciation
     *
     * @param integer $age
     * @param string $race
     * @param string $couleur
     */
    public function __construct(int $age, string $race, string $couleur)
    {
        $this->age = $age;
        $this->race = $race;
        $this->couleur = $couleur;
    }

    /**
     * Cri du chien
     *
     * @return string
     */
    public function aboie():string
    {
        return "Ouaf";
    }

    /**
     * Ces méthodes sont des méthodes appelées getter ou encore accesseur
     *
     * @return int
     */
    public function getAge():int
    {
        return $this->age;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getRace():string
    {
        return $this->race;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getCouleur():string
    {
        return $this->couleur;
    }

    /**
     * Ces méthodes sont appelées des setter ou encore mutateur
     *
     * @param int $age
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    /**
     * Undocumented function
     *
     * @param string $race
     * @return void
     */
    public function setRace(string $race)
    {
        $this->race = $race;
    }

    /**
     * Undocumented function
     *
     * @param string $couleur
     * @return void
     */
    public function setCouleur(string $couleur)
    {
        $this->couleur = $couleur;
    }
}