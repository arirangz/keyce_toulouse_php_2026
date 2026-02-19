<?php

class Rectangle
{
    public function __construct(
        protected float $longeur,
        protected float $largeur,
        protected string $couleur
    ) {
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
    public function getCouleur(): string
    {
        return $this->couleur;
    }
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }


    public function calculerSurface(): float
    {
        return $this->longeur * $this->largeur;
    }
}
