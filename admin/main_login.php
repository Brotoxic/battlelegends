<?php
session_start();

if (isset($_SESSION['username'])) {
    header("location:index.php");
}
?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Battlelegends - Panel administrateur</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
        <link href="bootstrap/css/main.css" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    </head>

    <body>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <img src="../assets/img/logo.png">
                </div>

            </div>
            <h1>Connexion au Panel Administrateur</h1>
        </div>


        <form class="form-signin" name="form1" method="post" action="checklogin.php">

            <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Nom d'utilisateur" autofocus>
            <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Mot de passe">
            <!-- The checkbox remember me is not implemented yet...
            <label class="checkbox">
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            -->
            <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-log-in"></span> Connexion</button>

            <div id="message"></div>
        </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="bootstrap/js/login.js"></script>

</body>
</html>
