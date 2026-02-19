<?php
require_once "Forme.php";
class Rectangle extends Forme
{
    public function __construct(
        protected string $couleur,
        protected float $longeur,
        protected float $largeur
    ) {
        $this->setCouleur($couleur);
        $this->setLargeur($largeur);
        $this->setLongeur($longeur);
    }

    public function getLongeur(): float
    {
        return $this->longeur;
    }
    public function setLongeur(float $longeur): void
    {
        if ($longeur >= 0) {
            $this->longeur = $longeur;
        } else {
            $this->longeur = 0;
        }
    }
    public function getLargeur(): float
    {
        return $this->largeur;
    }
    public function setLargeur(float $largeur): void
    {
        if ($largeur >= 0) {
            $this->largeur = $largeur;
        } else {
            $this->largeur = 0;
        }
    }


    public function calculerSurface(): float
    {
        return $this->longeur * $this->largeur;
    }
}
