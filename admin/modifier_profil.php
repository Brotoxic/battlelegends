<?php
session_start();
if (!isset($_SESSION['username'])) {
header("location:main_login.php");
exit();
}
?>
<?php
$title = "Modifier mon profil";
require('includes/header.php');
/* Si l'utlisateur est modérateur, interdire l'accès */
if ($profil['id_roles'] == 2) {
echo "<script type='text/javascript'>document.location.replace('erreur.php');</script>";
}
/* formulaire de creation de compte */
include'../db/config.php';
//Fetching Values from URL
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

                <!-- general form elements -->
                <div class="box box-primary" id="formulaire">
                    <div class="box-header">
                        <i class="fa fa-user"></i>
                        <h3 class="box-title"><?php echo $profil['pseudo'] ?></h3><div style="float:right;"> <a href="profil.php" class="btn btn-default"><i class="fa fa-chevron-left"></i> Retourner sur mon profil</a></div>
                            
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" id="myForm" name="update" action="modifier_profil_succes.php" role="form" required>
                        <div class="box-body">
                           
                            <div class="form-group">
                                <label for="Password">Mot de passe</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="********" required>
                                <span class="help-block">Entrez votre mot de passe actuel ou un nouveau mot de passe</span>
                            </div>
                            
                            <div class="form-group">
                                <label for="Pseudo">Modifier votre Pseudo</label>
                                <input pattern="[A-Za-z-0-9]{1,25}" type="text" name="pseudo" class="form-control" id="pseudo" value="<?php echo $profil['pseudo']; ?>" required>
                                <span class="help-block">Entre 1 et 25 caractères. Pas de caractères spéciaux !</span>
                            </div>                           
                        </div>
                        <div class="box-footer">
                            
                            <button id="submit" name="submit" type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Modifier
                            </button>
                        </div>

                    </form>
                </div><!-- /.box-body -->



            </div><!-- /.box -->

        </div>
    </section>
</div>
<?php
require('includes/footer.php');
?>
