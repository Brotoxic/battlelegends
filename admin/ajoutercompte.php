<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:main_login.php");
    exit();
}
?>
<?php
$title = "Ajouter un compte";
require('includes/header.php');
/* Si l'utlisateur est modérateur, interdire l'accès */
if ($profil['id_roles'] == 2) {
    echo "<script type='text/javascript'>document.location.replace('erreur.php');</script>";
}
/* formulaire de creation de compte */
include'../db/config.php';
//Fetching Values from URL
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$pseudo = $_POST['pseudo'];
$id_roles = $_POST['role'];
//Insert query
$query = "INSERT into a_users(username, password, email, pseudo, id_roles) values ('$username', MD5('$password'),'$email', '$pseudo', '$id_roles')";
$query2 = mysql_query("SELECT username FROM a_users WHERE username='" . $username . "'");
$query3 = mysql_query("SELECT username FROM a_users WHERE email='" . $email . "'");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ajouter un compte
            <small>Administrateur, joueur ou modérateur</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Administration</a></li>
            <li class="active">Ajouter un compte</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">

                <?php
                if (mysql_num_rows($query2) != 0) {
                    echo "<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>Ce nom d'utilisateur existe déjà !</div>";
                } else if (mysql_num_rows($query3) != 0) {
                    echo "<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>Cette adresse email existe déjà !</div>";
                } else if (isset($_POST['submit'])) {
                    mysql_query($query) or die('Erreur SQL !' . $sql . '<br>' . mysql_error());

                    echo "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>Compte créé avec succès !</div>";
                }


                mysql_close();  // on ferme la connexion 
                ?>

                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Créer un compte</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form method="post" id="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="User">Nom d'utilisateur</label>
                                <input pattern="[A-Za-z-0-9]{1,25}" type="text" class="form-control" id="username" placeholder="Entrez un nom d'utilisateur" name="username" required>
                                <span class="help-block">Entre 1 et 25 caractères. Pas de caractères spéciaux !</span> 
                            </div>
                            <div class="form-group">
                                <label for="Password">Mot de passe</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Entrez un mot de passe" required>
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Entrez une adresse email" required>
                            </div>
                            <div class="form-group">
                                <label for="Pseudo">Pseudo</label>
                                <input pattern="[A-Za-z-0-9]{1,25}" type="text" name="pseudo" class="form-control" id="pseudo" placeholder="Entrez un pseudo" required>
                                <span class="help-block">Entre 1 et 25 caractères. Pas de caractères spéciaux !</span>
                            </div>
                            <!--<div class="form-group">
                                <label for="exampleInputFile">Avatar</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Ajoutez l'avatar du compte.</p>
                            </div>-->
                            <div class="form-group">
                                <label for="role">Rôle</label>

                                <select id="role" name="role" class="form-control">
                                    <option value="1">Administrateur</option>
                                    <option value="2">Joueur</option>
                                    <option value="3">Community Manager</option>
                                </select>
                            </div>

                        </div>
                        <div class="box-footer">
                            <button id="submit" name="submit" type="submit" class="btn btn-primary">Créer le compte
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


