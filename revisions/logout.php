<?php
session_start();
//Supprimer les données du serveur
session_destroy();
//Supprimer les données du tableau $_SESSION
session_unset();

// On redirige l'utilisateur vers la page de login
header("Location: login.php");