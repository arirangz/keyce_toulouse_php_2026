<?php
class Voiture 
{

    public function __construct(
        private string $marque,
        private float $vitesseMax
    )
    {
    }

    //Modifier/écrire
    public function setVitesseMax(float $vitesse):void
    {
        if ($vitesse >= 0) {
            $this->vitesseMax = $vitesse;
        } else {
            $this->vitesseMax = 0;
        }
    }
    //Récupérer/lire
    public function getVitesseMax():float
    {
        return $this->vitesseMax;
    }

    public function getMarque():string
    {
        return $this->marque;
    }
    public function setMarque(string $marque):void
    {
        $this->marque = $marque;
    }



    // Ceci est une méthode
    public function klaxonner():void
    {
        echo "La voiture ".$this->marque." fait bip bip!";
    }
}
