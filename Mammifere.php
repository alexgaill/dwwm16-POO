<?php

class Mammifere {
    /**
     * Age de l'animal
     *
     * @var int
     */
    private $age;

    /**
     * race de l'animal
     *
     * @var string
     */
    private $race;

    /**
     * Couleur de l'animal
     *
     * @var string
     */
    private $couleur;

    // protected $type;

    /**
     * Constructeur de l'animal permettant de définir les informations par défaut de l'animal à l'instanciation
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