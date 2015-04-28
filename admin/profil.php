<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:main_login.php");
    exit();
}
?>
<?php
$title = "Mon profil";
require('includes/header.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Mon profil
            <small>Voici les détails de votre profil</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Mon compte</a></li>
            <li class="active">Mon profil</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <i class="fa fa-user"></i>
                        <h3 class="box-title"><?php echo $profil['pseudo'] ?></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <dl>
                            <dt>Nom d'utilisateur</dt>
                            <dd><?php echo $profil['username']; ?></dd>
                            <dt>Pseudo</dt>
                            <dd><?php echo $profil['pseudo']; ?></dd>
                            <dt>Email</dt>
                            <dd><?php echo $profil['email']; ?></dd>
                            <dt>Avatar</dt>
                            <dd><?php echo $profil['avatar']; ?> Les avatars fonctionnent pas encore niquez-vous.</dd>
                            <dt>Rôle</dt>
                            <dd><?php echo $profil['nom']; ?></dd>
                        </dl>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                       <a href="modifier_profil.php" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Modifier mon profil
                        </a>
                    </div>
                </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>

<?php
require('includes/footer.php');
?>    