<?php
session_start();
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

    <link rel="icon" href="../favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="../asset/css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>
<!-- START PAGE CONTAINER -->
<div class="page-container page-navigation-top">
    <!-- PAGE CONTENT -->
    <div class="page-content">

        <?php require_once '../includes/menuAdmin.php'?>

        <div class="page-title">
            <h2><span class="fa fa-arrow-circle-o-left"></span> Accuiel</h2>
        </div>

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <!-- START VERTICAL FORM SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Vertical Form Sample</h3>
                                    <form action="../scripts/ajouterCategorie.php" method="post" role="form">
                                        <div class="form-group">
                                            <label form="addCatego">Nom Categorie</label>
                                            <input type="text" id="addCatego" name="nomCategorie" class="form-control" placeholder="Le Nom du Categorie" required="required"/>
                                            <span class="help-block">Taper le nom d'un categorie qui n'éxiste pas dans la liste</span>
                                        </div>
                                        <button type="submit" name="saveCat" class="btn btn-success"><span class="fa fa-plus"></span> Ajouter</button>
                                    </form>
                                </div>
                            </div>
                            <!-- END VERTICAL FORM SAMPLE -->
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

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="../asset/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../asset/js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="../asset/js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='../asset/js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="../asset/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="../asset/js/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->
<script type="text/javascript" src="../asset/js/plugins.js"></script>
<script type="text/javascript" src="../asset/js/actions.js"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
</body>
</html>






