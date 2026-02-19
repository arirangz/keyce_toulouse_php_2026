<?php

class Vehicule
{
    public function __construct(
        protected string $marque,
        protected float $vitesseMax
    ) {}

    //Modifier/écrire
    public function setVitesseMax(float $vitesse): void
    {
        if ($vitesse >= 0) {
            $this->vitesseMax = $vitesse;
        } else {
            $this->vitesseMax = 0;
        }
    }
    //Récupérer/lire
    public function getVitesseMax(): string
    {
        return $this->vitesseMax . "km/h";
    }

    public function getMarque(): string
    {
        return $this->marque;
    }
    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }



    // Ceci est une méthode
    public function klaxonner(): void
    {
        echo "bip bip!";
    }
}
