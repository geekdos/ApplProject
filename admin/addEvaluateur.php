<?php
session_start();
require_once '../classes/MysqlDb.php';
require_once '../classes/Personne.php';
require_once '../classes/Evaluateur.php';
$evaluatro = new Evaluateur();
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
            <h2><span class="fa fa-plus"></span> Ajouter eveluateur</h2>
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
                                    <h3>Ajouter eveluateur</h3>
                                    <form action="../scripts/ajouterEvaluateur.php" method="post" id="profilpost" name="profil" enctype="multipart/form-data">
                                        <div class="container-fluid">
                                            <div data-wizard-init>
                                                <div class="steps-content">
                                                    <div data-step="1">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Nom</label>
                                                            <input type="text" class="form-control" name="nom" id="exampleInputEmail1" placeholder="nom">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Prénom</label>
                                                            <input type="text" class="form-control" name="prenom" id="exampleInputEmail1" placeholder="prénom">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">CIN</label>
                                                            <input type="text" class="form-control" name="cin" id="exampleInputEmail1" placeholder="CIN">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Date de Naissance</label>
                                                            <input type="date" class="form-control" name="dateNaiss" id="exampleInputEmail1" placeholder="Date de Naissance">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email</label>
                                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Mot de passe</label>
                                                            <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="Mot de Passe">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Confermation du Mot de passe</label>
                                                            <input type="password" class="form-control" name="cpassword" id="exampleInputEmail1" placeholder="Confirmé Mot de passe">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Nationalité</label>
                                                            <input type="text" class="form-control" name="nationalite" id="exampleInputEmail1" placeholder="Nationalité">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Adresse</label>
                                                            <input type="text" class="form-control" name="adress" id="exampleInputEmail1" placeholder="Adresse">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Téléphone</label>
                                                            <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Téléphone">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Discipline</label>
                                                            <input type="text" class="form-control" name="discipline" id="exampleInputEmail1" placeholder="Discipline">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Domaine de recherche</label>
                                                            <input type="text" class="form-control" name="domainerecherche" id="exampleInputEmail1" placeholder="Domaine de recherche">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Etablissement de rattache</label>
                                                            <input type="text" class="form-control" name="etablissementrattache" id="exampleInputEmail1" placeholder="Etablissement de rattache">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">CV</label>
                                                            <input type="file" class="form-control" name="cvEvaluateur" id="exampleInputEmail1" >
                                                        </div>
                                                        <hr>
                                                        <button type="submit" name="save" class="btn btn-success">Enregistrer</button>
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






