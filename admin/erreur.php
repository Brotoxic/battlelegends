<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:main_login.php");
}
?>
<?php
$title = "Erreur";
require('includes/header.php');

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Erreur
            <small>Vous n'avez pas accès à ce contenu !</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
            <li class="active">Erreur</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="alert alert-warning">
                    Veuillez contacter l'administrateur si vous voulez accéder à ce contenu.
                    <br><strong>En même temps t'es que un modo de merde ! LOL</strong>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require('includes/footer.php');
?>    


