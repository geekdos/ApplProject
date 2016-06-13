<?php
session_start();
require_once '../classes/MysqlDb.php';
require_once '../classes/Categorie.php';
require_once '../classes/Sujet.php';

$categorie = new Categorie();
$subject = new Sujet();

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
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">La liste des categorie avec les sujets</h3>
                        </div>

                        <?php $i = 1;
                        foreach ($categorie->getAllCategories() as $values): ?>
                            <div class="col-md-6">
                                <!-- START PANEL WITH CONTROL CLASSES -->
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><?= $values['nom_categorie']; ?></h3>
                                        <ul class="panel-controls">
                                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Nom</td>
                                                <td>Action</td>
                                            </tr>
                                            <?php foreach ($subject->getAllSubjectCat($values['id_categorie']) as $values1): ?>
                                                <tr>
                                                    <td><?= $values1['nom_sujet']; ?></td>
                                                    <td>
                                                        <?= "<a href='../scripts/supprimerSujet.php?id_sujet=".$values1['id_sujet']."' class='btn btn-danger btn-xs pull-right'>Supprimer</a>" ?>
                                                    </td>
                                                </tr>
                                            <?php  endforeach; ?>
                                        </table>
                                    </div>
                                    <div class="panel-footer">
                                        <?= "<a href='../scripts/supprimerCategorie.php?id_categorie=".$values['id_categorie']."' class='btn btn-danger pull-right'><span class='fa fa-trash-o'></span></a>" ?>
                                    </div>
                                </div>
                                <!-- END PANEL WITH CONTROL CLASSES -->
                            </div>
                        <?php $i++; endforeach; ?>
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






