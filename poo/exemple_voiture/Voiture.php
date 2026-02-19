<?php
class Voiture 
{

    public function __construct(
        public string $marque,
        public float $vitesseMax
    )
    {
    }

    // Ceci est une méthode
    public function klaxonner():void
    {
        echo "La voiture ".$this->marque." fait bip bip!";
    }
}
