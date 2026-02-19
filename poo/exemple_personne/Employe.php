<?php

require_once "Personne.php";

class Employe extends Personne
{
    public function __construct(
        protected string $prenom,
        protected string $nom,
        protected string $poste
    ) {}


    /**
     * Get the value of poste
     */
    public function getPoste(): string
    {
        return $this->poste;
    }

    /**
     * Set the value of poste
     */
    public function setPoste(string $poste): self
    {
        $this->poste = $poste;

        return $this;
    }
    public function getNomComplet(): string
    {
        return parent::getNomComplet() . " - ".$this->poste;
    }

}
