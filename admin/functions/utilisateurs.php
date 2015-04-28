<?php

include'/customers/9/3/c/battlelegends.fr/httpd.www/db/config.php';

/* PAGINATOR */
$sql2 = "SELECT COUNT(id) AS nbUsers FROM a_users";
$requsers = mysql_query($sql2) or die('Erreur SQL !<br />' . $sql2 . '<br />' . mysql_error());
$dataUsers = mysql_fetch_assoc($requsers);
if (isset($_GET['p'])) {
    $cPage = $_GET['p'];
} else {
    $cPage = 1;
}
$nbUsers = $dataUsers['nbUsers'];
$perPage = 4;
$nbPage = ceil($nbUsers / $perPage);

$start = (($cPage - 1) * $perPage);
/* Selectionner tous les utilisateurs et leur rôle */
$sql = "SELECT a_users.id as id_user, a_users.username as username, a_users.email as email, a_users.avatar as avatar, a_users.pseudo as pseudo, a_users.id_roles as id_roles, a_roles.nom as nom"
        . " FROM a_users "
        . " INNER JOIN a_roles "
        . " ON a_users.id_roles = a_roles.id"
        . " LIMIT $start, 4";

// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$utilisateur = mysql_query($sql) or die('Erreur SQL !<br />' . $sql2 . '<br />' . mysql_error());
// on libère l'espace mémoire alloué pour cette interrogation de la base







