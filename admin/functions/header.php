<?php

include '/customers/9/3/c/battlelegends.fr/httpd.www/db/config.php';

/* RECUPERE LE PSEUDO DE L'ADMIN POUR L'AFFICHER DANS HEADER.PHP */

$sqlprofil = "SELECT * FROM a_users as u INNER JOIN a_roles as r ON u.id_roles = r.id  WHERE u.username='" . $_SESSION["username"] . "'";
// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$reqprofil = mysql_query($sqlprofil) or die('Erreur SQL !<br />' . $sqlprofil . '<br />' . mysql_error());
// on recupere le resultat sous forme d'un tableau
$profil = mysql_fetch_array($reqprofil);
// on libère l'espace mémoire alloué pour cette interrogation de la base
mysql_free_result($reqprofil);
mysql_close();

/* FIN DE RECUPERE LE PSEUDO DE L'ADMIN POUR L'AFFICHER DANS HEADER.PHP */
