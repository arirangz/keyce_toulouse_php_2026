<?php
require_once "Rectangle.php";

$chambre = new Rectangle(-4,3,"rouge");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice formes</h1>
    <h2>Surface de la chambre: <?= $chambre->calculerSurface() ?>m²</h2>
    <h3>Couleur des murs: <?= $chambre->getCouleur() ?></h3>
</body>
</html>
