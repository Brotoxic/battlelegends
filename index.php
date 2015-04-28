<?php
$page_title = "Battlelegends.fr - Bienvenue";
include('includes/header.php');
?>

<!-- CAROUSEL -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="assets/img/slide1.jpg" width="100%" height="250px" alt="...">
            <div class="carousel-caption">
                <h3>Battlelegends TV sur Twitch !</h3>
            </div>
        </div>

        <div class="item">
            <img src="assets/img/slide2.jpg" width="100%" height="250px" alt="...">
            <div class="carousel-caption">
                <h3>Coming soon - Envoyez-nous vos Penta!</h3>
            </div>
        </div>

        <div class="item">
            <a href="http://shop.battlelegends.fr"><img src="assets/img/slide3.jpg" width="100%" height="250px" alt="...">
                <a href="http://shop.battlelegends.fr">
                    <div class="carousel-caption">
                        <h3>Notre boutique LOL est en ligne</h3>
                    </div>
                </a>
        </div>

    </div>

    <!-- CONTROLS -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div> 
<!-- CAROUSEL SECTION END -->

<!-- MENU SECTION END-->
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line"><i class="fa fa-home"></i> Accueil</h4>

            </div>
        </div>          
        <!-- PROGRESS BAR -->
        <div class="row">
            <div class="col-md-12">
                <h4>Avancement du projet: <strong>20%</strong></h4>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    </div>
                </div>
            </div>
        </div>

        <!-- PROGRESS BAR END -->

        <!-- MESSAGE ANNONCE -->

        <div class="row">
            <div class="col-md-8">
                <div class="alert alert-success accueil-success">
                    <p>Bonjour, Battlelegends est en cours de création, je suis actuellement seul sur le projet, je recrute des <strong>streamers ayant la fibre optique</strong>, <strong>un développeur web ayant de bonnes connaissances en PHP 5+</strong> ainsi qu'un <strong>community manager.</strong> Eventuellement, je serais ravi de recruter aussi un <strong> Graphiste</strong>.</p>

                    <p><i>NB: la rémunération ne sera possible qu'à partir du lancement du site.</i></p>
                    
                    <p>De plus, je tiens à vous dire que ce projet est très sérieux. C'est pour cela que je souhaite recruter des personnes de confiance. J'espère que vous serez <strong>nombreux</strong> à me suivre dans cette aventure ! Pour toutes autres questions, je vous invite dès à présent à m'envoyer un mail ou à me contacter sur Skype. Je vous rappelle que nous avons un facebook ! (en haut à droite de la page) LA BISE & MERCI !</p>


                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Postuler
                    </button>
                    <!-- CONTACT MODAL -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel"><img src="assets/img/favicon.png"> Postuler pour Battlelegends</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-info"><p>Le formulaire ci-dessous n'est pas fonctionnel pour le moment.</p><p><i class="fa fa-skype"></i> Ajoutez-moi sur skype: <strong>Toxic9449</strong></p></div>
                                    <form class="form-horizontal">
                                        <fieldset>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="name">Votre nom</label>  
                                                <div class="col-md-5">
                                                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="email">Votre email</label>  
                                                <div class="col-md-5">
                                                    <input id="email" name="email" type="email" placeholder="jojo@gmail.com" class="form-control input-md" required="">

                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="skype">Votre skype</label>  
                                                <div class="col-md-5">
                                                    <input id="skype" name="skype" type="text" placeholder="" class="form-control input-md">

                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="demande">Votre demande</label>
                                                <div class="col-md-5">
                                                    <select id="demande" name="demande" class="form-control" required="">
                                                        <option value="1">Streamer</option>
                                                        <option value="2">Développeur Web</option>
                                                        <option value="3">Community Manager</option>
                                                        <option value="4">WebDesigner</option>
                                                        <option value="">Autre...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="motivations">Motivations</label>
                                                <div class="col-md-4">                     
                                                    <textarea class="form-control" id="motivations" name="motivations" required="">J'aimerais postuler chez Battlelegends car...</textarea>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CONTACT MODAL END -->

                </div>
            </div>
            <!--Side Bar -->
            <div class='col-md-4'>
                <h4 class="sidebar-title"><i class="fa fa-trophy"></i> Prochain Tournoi</h4>
                <div class="col-md-8">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/200x200" alt="">
                </a>
            </div>
            <div class="col-md-4">
            <p></p>
            </div>
            </div>
            <!-- fin sidebar-->
        </div> 
        <!--seperator-->
<hr>
<!--seperator-->
        <!-- Project One -->

        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3 class="news">News 1</h3>
                <h4>Titre secondaire</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class="btn btn-primary" href="#">Lire plus... <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>

        <!-- /.row -->
        <hr>
        <!--Autres News -->
        <div class="row">
            <div class="col-md-12">
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="assets/img/logofb.png" alt="..." width="64px">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--News End -->
        <div class="row">
            <div class="col-md-12">
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="assets/img/logofb.png" alt="..." width="64px">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->

<?php
include('includes/footer.php');
?>
</html>
