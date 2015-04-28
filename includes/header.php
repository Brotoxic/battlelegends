<?php
require_once('db/config.php');
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="League of Legends eloboost portail boost multigaming webtv" />
        <meta name="author" content="Battlelegends" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png" />
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <![endif]-->
        <title><?php echo $page_title; ?></title>
        <!-- BOOTSTRAP CORE STYLE  -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONT AWESOME ICONS  -->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLE  -->
        <link href="assets/css/style.css" rel="stylesheet" />
        <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-6" id="pub">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- 2 -->

                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-9253579683768027"
                             data-ad-slot="9456625194"
                             data-ad-format="auto"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                    <div class="col-md-6 headertop">
                        <a href="mailto:contact@battlelegends.fr"><i class="fa fa-envelope-o"></i> contact@battlelegends.fr</a>
                        &nbsp;&nbsp;
                        <i class="fa fa-skype"></i> Toxic9449
                        &nbsp;&nbsp;
                        <a href="http://facebook.com/battlelegends.fr" target="_blank"><i class="fa fa-facebook-square"></i> /battlelegends.fr</a>
                    </div>

                </div>
            </div>
        </header>

        <!-- HEADER END-->
        <div  class="navbar navbar-inverse set-radius-zero">

            <div class="container">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" id="logoheader">

                        <img src="assets/img/logo.png" />

                    </a>

                </div>


            </div>

        </div>
        <!-- LOGO HEADER END-->

        <section class="menu-section navbar1">

            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-collapse collapse">
                            <ul id="menu-top" class="nav navbar-nav navbar-right">

                                <li><a href="index.php"><i class="fa fa-home"></i>&nbsp; Accueil</a></li>
                                <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                        <i class="fa fa-desktop"></i>&nbsp; WebTV <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu principal" role="menu">
                                        <li><a href="webtv1.php">Battlelegends TV1</a></li>
                                        <li><a href="#"><i class="fa fa-plus"></i> Extension</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-trophy"></i>&nbsp; Nos tournois</a></li>
                                <li><a href="#"><i class="fa fa-th-list"></i> Classement</a></li>
                                <li><a href="#"><i class="fa fa-globe"></i>&nbsp; L'Actu</a></li>
                                <li><a href="#"><i class="fa fa-users"></i>&nbsp; Communauté</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-lock"></i> Mon compte</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><img src="../assets/img/favicon.png" > Se connecter à Battlelegends.fr</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="well">
                                                <form id="loginForm" method="POST" action="#" novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for="username" class="control-label">Nom d'utilisateur</label>
                                                        <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                                            <span class="help-block"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="control-label">Mot de passe</label>
                                                        <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                                            <span class="help-block"></span>
                                                    </div>
                                                    <div id="loginErrorMsg" class="alert alert-error hide">Mais nom d'utilisateur ou mot mot de passe...</div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="remember" id="remember"> Se rappeler de moi
                                                        </label>
                                                        <p class="help-block">(si c'est un ordinateur privé)</p>
                                                    </div>
                                                    <button type="submit" class="btn btn-success btn-block">Connexion</button>
                                                    <a href="/forgot/" class="btn btn-default btn-block">Un problème ?</a>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <img src="../assets/img/logofooter.png" width="100%">
                                                <p class="lead">Pourquoi <span class="text-success">s'inscrire ?</span></p>
                                                <ul class="list-unstyled" style="line-height: 2">
                                                    <li><span class="fa fa-check text-success"></span> Participez à nos tournois</li>
                                                    <li><span class="fa fa-check text-success"></span> Faites vivre la communauté</li>
                                                    <li><span class="fa fa-check text-success"></span> Des cadeaux tous les jours</li>
                                                    <li><span class="fa fa-check text-success"></span> Des réductions sur notre boutique</li>
                                                    <li><span class="fa fa-check text-success"></span> Et bien plus ! </li>

                                                </ul>
                                                <p><a href="/new-customer/" class="btn btn-info btn-block">D'accord, s'inscrire maintenant!</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </section>
