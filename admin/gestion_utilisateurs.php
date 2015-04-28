<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:main_login.php");
    exit();
}
?>
<?php
$title = "Gestion des utilisateurs";
require('includes/header.php');
include 'functions/utilisateurs.php';
include'/customers/9/3/c/battlelegends.fr/httpd.www/db/config.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Gestion des utilisateurs
            <small>Modifier profil, role, équipe associée</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
            <li class="active">Gestion des utilisateurs</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <?php
            $id_user = $_GET["id_user"];
            $sql3 = "DELETE FROM a_users WHERE id =" . $id_user;
            if (!is_null($id_user)) {
                $deleteuser = mysql_query($sql3) or die('Erreur SQL !<br />' . $sql3 . '<br />' . mysql_error());
                echo "
                    <div class=\"col-md-3\">
                    <div class=\"alert alert-success\" role=\"alert\">
                   <i class=\"fa fa-spinner fa-spin\"></i> Suppression en cours...</div>
                        
                    <script>setTimeout(function () {
       window.location.href = \"gestion_utilisateurs.php\"; //will redirect to your blog page (an ex: blog.html)
    }, 1000);</script>
                    </div>
                    ";
            }
            ?>
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Les utilisateurs de Battlelegends</h3>
                        <div class="box-tools">
                            <div class="input-group">

                                <input type="text" name="requete" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Rechercher"/>
                                <div class="input-group-btn">
                                    <button name="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                </div>

                            </div>
                        </div>
                    </div><!-- /.box-header -->

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">

                            <tr> 
                                <th>ID</th>
                                <th>Nom d'utilisateur</th>
                                <th>Email</th>
                                <th>Avatar</th>
                                <th>Pseudo</th>
                                <th>Rôle</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <?php while ($u = mysql_fetch_array($utilisateur)): ?>
                                    <td><?php echo $u['id_user'] ?></td>
                                    <td><?php echo $u['username'] ?></td>
                                    <td><?php echo $u['email'] ?></td>
                                    <td><span class="label label-success"><?php echo $u['avatar'] ?></span></td>
                                    <td><?php echo $u['pseudo'] ?></td>
                                    <td><?php echo $u['nom'] ?></td>
                                    <td>

                                        <a href="" class="btn btn-app">
                                            <i class="fa fa-edit"></i> Modifier
                                        </a>


                                        <a href="<?php echo '?id_user=' . $u['id_user']; ?>" class="btn btn-app" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cet utilisateur?'));">
                                            <i class="fa fa-trash-o"></i> Supprimer
                                        </a>

                                    </td>
                                </tr>
                            <?php endwhile; ?>


                        </table>
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                
                                <?php
                                
                                for ($i = 1; $i <= $nbPage; $i++) {

                                    echo "<li><a href=\"?p=$i\">$i</a></li>";
                                }
                                ?>
                               
                            </ul>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section>
    <!-- Main content end -->

</div><!-- /.content-wrapper -->

<?php
require('includes/footer.php');
?>  
