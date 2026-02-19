<?php
require_once "Personne.php";

class Etudiant extends Personne
{
    public function __construct(
        protected string $prenom,
        protected string $nom,
        protected string $diplome,
    ) {}

    /**
     * Get the value of diplome
     */
    public function getDiplome(): string
    {
        return $this->diplome;
    }

    /**
     * Set the value of diplome
     */
    public function setDiplome(string $diplome): self
    {
        $this->diplome = $diplome;

        return $this;
    }


}
