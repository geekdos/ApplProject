<?php
    session_start();

    require_once '../classes/MysqlDb.php';
    require_once '../classes/Categorie.php';

    $categiries = new Categorie();
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- META SECTION -->
    <title>Admin</title>
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
            <h2><span class="fa fa-plus"></span> Ajouter un sujet</h2>
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
                                    <h3>Ajouter un sujet</h3>
                                    <form action="../scripts/ajouterSujet.php" method="post" id="profilpost" name="profil">
                                        <div class="container-fluid">
                                            <div data-wizard-init>
                                                <div class="steps-content">
                                                    <div data-step="1">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Sujet</label>
                                                            <input type="text" class="form-control" name="subjectName" id="exampleInputEmail1" placeholder="nom du sujet">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Categorie</label>
                                                            <select name="categoriesId" class="form-control" id="categorieName" title="Nom de la categorie">
                                                                <?php foreach ($categiries->getAllCategories() as $value): ?>
                                                                    <option value="<?= $value['id_categorie'] ?>">
                                                                        <?= $value['nom_categorie'] ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <hr>
                                                        <button type="submit" name="saveSubject" class="btn btn-success">Ajouter</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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






