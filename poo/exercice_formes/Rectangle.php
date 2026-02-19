<?php

class Rectangle
{
    public function __construct(
        public float $longeur,
        public float $largeur,
        public string $couleur
    )
    {
    }

    public function calculerSurface():float
    {
        return $this->longeur*$this->largeur;
    }
}

