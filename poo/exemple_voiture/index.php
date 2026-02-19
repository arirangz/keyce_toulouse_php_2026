<?php
require_once "Voiture.php";

$toyota = new Voiture("Toyota", 210);
$toyota->klaxonner();

var_dump($toyota);

$peugeot = new Voiture("Peugeot", 200);


var_dump($peugeot);