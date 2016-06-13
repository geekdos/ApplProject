<?php
require_once 'classes/MysqlDb.php';
require_once 'classes/Categorie.php';
require_once 'classes/Sujet.php';
$categorie = new Categorie();
$sujet = new Sujet();
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- META SECTION -->
    <title>Atlant - Responsive Bootstrap Admin Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="asset/css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>
<!-- START PAGE CONTAINER -->
<div class="page-container page-navigation-top">
    <!-- PAGE CONTENT -->
    <div class="page-content">

        <?php require_once 'includes/menu.php'?>

        <div class="page-title">
            <h2><span class="fa fa-arrow-circle-o-left"></span> Accuiel</h2>
        </div>

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php
                            require_once 'includes/listCategorySubject.php'
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="asset/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="asset/js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="asset/js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='asset/js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="asset/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->
<script type="text/javascript" src="asset/js/plugins.js"></script>
<script type="text/javascript" src="asset/js/actions.js"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
</body>
</html>






