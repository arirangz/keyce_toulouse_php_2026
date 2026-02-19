<?php
class Voiture 
{
    // Des propriétés
    public string $marque;
    public float $vitesseMax;

    // Ceci est une méthode
    public function klaxonner():void
    {
        echo "bip bip!";
    }
}
