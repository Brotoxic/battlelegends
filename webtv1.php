<?php
$page_title = "Battlelegends.fr - WebTV1";
include('includes/header.php');
?>
<script>
$("button#cinema").click(function() {

}
</script>
<link href='assets/css/fullcalendar.css' rel='stylesheet' />
<link href='assets/css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='assets/js/moment.min.js'></script>
<script src='assets/js/fullcalendar.min.js'></script>
<div class="content-wrapper">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line"><i class="fa fa-desktop"></i> WebTV 1</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <img src="assets/img/webtv.png" width="100%">
            </div>
        </div>

        <div class="row " id="twitch">
            <div class="col-md-8" id="twitchcinema">
                <div class="col-md-12">
                    <h4 class="sidebar-title"><i class="fa fa-twitch"></i> Le live</h4>
                    <iframe id="player" class="player1" src="http://www.twitch.tv/battlelegendstv/embed" frameborder="0" scrolling="no" height="600" width="100%"></iframe>
                </div>

                <div class="col-md-12" style="margin-bottom: 15px;">
                    <div class="col-md-3 text-left ">
                       <button class="btn btn-primary btn-lg" id="cinema" onclick="$('#twitchcinema').toggleClass('col-md-8'); $('#chat').toggleClass('col-md-4'); $('#player').toggleClass('player1'); display();" ><span class="glyphicon glyphicon-eye-open"></span> Cinema on/off</button>
                       
                    </div>
                    <div class="col-md-3 text-left">
                        <button class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-thumbs-up"></span> Faire un don</button>
                    </div>
                </div>
            </div>
            <div class='col-md-4' id="chat">
                <h4 class="sidebar-title"><i class="fa fa-comments"></i> Le chat</h4>
                <iframe src="http://www.twitch.tv/battlelegendstv/chat?popout=" frameborder="0" scrolling="no" height="500" width="100%"></iframe>
            </div>

        </div>
        

        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line"><i class="fa fa-pencil"></i> L'agenda: aujourd'hui sur la WebTV1</h4>
                
            </div>
        </div>
        <div class='row'>
            <div class="col-md-12">

 

            </div>
        </div>

    </div>
</div>

<?php
include('includes/footer.php');
?>

