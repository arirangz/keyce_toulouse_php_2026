<?php
abstract class Forme
{
    public function __construct(
        protected string $couleur
    ) {
        $this->setCouleur($couleur);
    }

    abstract function calculerSurface():float;

    /**
     * Get the value of couleur
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     */
    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }
    
}
