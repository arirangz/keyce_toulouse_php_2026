<?php
require_once "Voiture.php";

$toyota = new Voiture("Toyota", 250);
$toyota->setVitesseMax(100);

echo "Vitesse de la voiture: ".$toyota->getVitesseMax();
//$toyota->klaxonner();

$peugeot = new Voiture("Peugeot", 200);

//$peugeot->klaxonner();