<?php
require_once "Voiture.php";

$toyota = new Voiture();
$toyota->marque = "Toyota";
$toyota->vitesseMax = 210;
$toyota->klaxonner();

var_dump($toyota);

$peugeot = new Voiture();
$peugeot->marque = "Peugeot";
$peugeot->vitesseMax = 200;

var_dump($peugeot);