<?php
require_once "Etudiant.php";
require_once "Employe.php";

$etudiant1 = new Etudiant("John", "Doe", "Bachelor Developpeur");

$employe1 = new Employe("Jane", "Spencer", "Développeuse Android");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemple Personne</h1>
    <h2>Etudiant:</h2>
    <p>Nom: <?= $etudiant1->getNomComplet(); ?></p>
    <p>Diplome: <?= $etudiant1->getDiplome(); ?></p>
    <h2>Employé</h2>
    <p>Nom: <?= $employe1->getNomComplet(); ?></p>
</body>
</html>