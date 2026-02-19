<?php
require_once "Forme.php";
class Cercle extends Forme
{
    public function __construct(
        protected string $couleur,
        protected float $rayon
    ) {
        $this->setCouleur($couleur);
        $this->setRayon($rayon);
    }

    /**
     * Get the value of rayon
     */
    public function getRayon(): float
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     */
    public function setRayon(float $rayon): self
    {
        if ($rayon >= 0) {

            $this->rayon = $rayon;
        } else {
            $this->rayon = 0;
        }

        return $this;
    }

    public function calculerSurface(): float
    {
        $calculRayon = pi() * $this->rayon ** 2;
        return round($calculRayon, 2);
    }
}
