<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:main_login.php");
    exit();
}
?>
<?php
$title = "Modification du profil";
require('includes/header.php');
/* Si l'utlisateur est modérateur, interdire l'accès */
if ($profil['id_roles'] == 2) {
    echo "<script type='text/javascript'>document.location.replace('erreur.php');</script>";
}
/* formulaire de creation de compte */
include'../db/config.php';
//Fetching Values from URL
$password = $_POST['password'];
$email = $_POST['email'];
$pseudo = $_POST['pseudo'];
$username = $_SESSION['username'];
//Insert query
$query = " UPDATE a_users SET password = MD5('$password'), pseudo='$pseudo' WHERE username='" . $_SESSION["username"] . "'";
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Modifier mon profil
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Mon compte</a></li>
            <li class="active">Modifier mon profil</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">

                <?php
                if (isset($_POST['submit'])) {
                    mysql_query($query) or die('Erreur SQL !' . $sql . '<br>' . mysql_error());

                    echo "
                    
                    <div class=\"alert alert-success\" role=\"alert\">
                        Compte modifié avec succès ! <br><i class=\"fa fa-spinner fa-spin\"></i> Actualisation de votre profil...</div>
                        
                    <meta http-equiv=\"refresh\" content=\"2;URL=profil.php\">
                    ";
                }
                mysql_close();  // on ferme la connexion 
                ?>





            </div>

        </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<?php
require('includes/footer.php');
?>
