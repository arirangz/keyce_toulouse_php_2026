<?php
require_once "Vehicule.php";
class Bateau extends Vehicule
{

    public function __construct(
        protected string $marque,
        protected float $vitesseMax,
        protected float $nombreCabines,
    )
    {
    }

    public function getNombreDeCabines():float
    {
        return $this->nombreCabines;
    }
    public function setNombreDeCabines(string $nombreCabines):void
    {
        $this->nombreCabines = $nombreCabines;
    }

}
