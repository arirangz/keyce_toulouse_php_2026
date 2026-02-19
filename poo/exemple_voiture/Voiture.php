<?php
require_once "Vehicule.php";
class Voiture extends Vehicule
{

    public function __construct(
        protected string $marque,
        protected float $vitesseMax,
        protected float $nombreDeRoues,
    )
    {
    }

    public function getNombreDeRoues():float
    {
        return $this->nombreDeRoues;
    }
    public function setNombreDeRoues(string $nombreDeRoues):void
    {
        $this->nombreDeRoues = $nombreDeRoues;
    }

}
