<?php

// On définit les 4 variables nécessaires à la connexion MySQL :
$hostname = "battlelegends.fr.mysql";
$user = "battlelegends_f";
$password = "16051994";
$nom_base_donnees = "battlelegends_f";

// Connexion au serveur MySQL
$conn = mysql_connect($hostname, $user, $password) or die(mysql_error());
mysql_set_charset('utf8', $conn);
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

// Choix de la base sur laquelle travailler
mysql_select_db($nom_base_donnees, $conn);
