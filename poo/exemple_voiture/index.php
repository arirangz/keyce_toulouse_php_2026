<?php
require_once "Voiture.php";

$toyota = new Voiture("Toyota", 210);
echo "Marque de la voiture: ".$toyota->marque;
//$toyota->klaxonner();

$peugeot = new Voiture("Peugeot", 200);

//$peugeot->klaxonner();