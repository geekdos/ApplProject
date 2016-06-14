<?php
session_start();
function __autoload($className){
    require_once '../classes/'.$className.'.php';
}

$projects = new Projet();
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

                    <!-- START DEFAULT DATATABLE -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Default</h3>
                            <ul class="panel-controls">
                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table datatable">
                                    <thead>
                                    <tr>
                                        <th>Titre du Projet</th>
                                        <th>Nom Sujet</th>
                                        <th>Priorité</th>
                                        <th>status</th>
                                        <th>Action</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($projects->getAllProject() as $values): ?>
                                            <tr>
                                                <td><?= $values->getTitre(); ?></td>
                                                <td><?= $values->getNomSujet(); ?></td>
                                                <td>
                                                    <?php if ($values->getPriorite() == 'urgent'){ ?>
                                                        <span class="badge badge-danger"><?= $values->getPriorite() ?></span>
                                                    <?php }else{ ?>
                                                        <span class="badge badge-info"><?= $values->getPriorite() ?></span>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if ($values->getStatus() == 'enAttente'){ ?>
                                                        <span class="badge badge-warning"><?= $values->getStatus(); ?></span>
                                                    <?php }else{ ?>
                                                        <span class="badge badge-success"><?= $values->getStatus(); ?></span>
                                                    <?php } ?>
                                                </td>
                                                <td class="text-center">
                                                    <a href="<?= '../scripts/supprimerProjet.php?id_projet='.$values->getIdProjet() ?>" class="btn btn-danger btn-xs">
                                                        <span class="fa fa-recycle"></span> Supprimer
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END DEFAULT DATATABLE -->
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






