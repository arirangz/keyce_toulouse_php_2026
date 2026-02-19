<?php
require_once "Voiture.php";
require_once "Bateau.php";

$toyota = new Voiture("Toyota", 250, 4);
$toyota->setVitesseMax(100);

echo "Vitesse de la voiture: ".$toyota->getVitesseMax();
$toyota->klaxonner();

$peugeot = new Voiture("Peugeot", 200, 4);

//$peugeot->klaxonner();

$bateau1 = new Bateau("Yamaha", 90, 2);
echo $bateau1->getMarque();