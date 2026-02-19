<?php
require_once "Rectangle.php";
require_once "Cercle.php";

$chambre = new Rectangle("rouge",4,3);

$disque = new Cercle("bleu", 5);

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
    <p>Couleur des murs: <?= $chambre->getCouleur() ?></p>

    <h2>Surface du cercle: <?=$disque->calculerSurface() ?></h2>
</body>
</html>
