<?php
// nom du serveur 
$host = "localhost";
// nom utilisateur
$login = "root";
// mot de passe
$pass = "";
// nom de la base de données
$dbname = "safeguard";

// connexion à la base de données
$bdd = mysqli_connect($host, $login, $pass, $dbname);
// vérification de la connexion
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// change character set to utf8
mysqli_set_charset($bdd, "utf8");
