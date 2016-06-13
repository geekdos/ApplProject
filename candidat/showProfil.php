<?php
session_start();
function __autoload($class)
{
    require_once '../classes/' . $class . '.php';
}

$candidat = new Candidat();
$candidat->setIdPersonne($_SESSION['id']);
$curentCandidate = $candidat->getProfilById();
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- META SECTION -->
    <title>L'Institut de Recherche sur le Cancer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
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

        <?php require_once '../includes/menuCandidate.php' ?>

        <!-- PAGE TITLE -->
        <div class="page-title">
            <h2><span class="fa fa-cogs"></span> Mon Profil</h2>
        </div>
        <!-- END PAGE TITLE -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-5">

                    <form action="#" class="form-horizontal">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3><span class="fa fa-user"></span> <?= $curentCandidate[0]['prenom'].' '.$curentCandidate[0]['nom'] ?></h3>
                                <p>Coordinateur</p>

                            </div>
                            <div class="panel-body form-group-separated">

                                <div class="form-group">
                                    <label class="col-md-3 col-xs-5 control-label">#ID</label>
                                    <div class="col-md-9 col-xs-7">
                                        <input type="text" value="<?= $curentCandidate[0]['id'] ?>" class="form-control" disabled/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 col-xs-5 control-label">E-mail</label>
                                    <div class="col-md-9 col-xs-7">
                                        <input type="text" value="<?= $curentCandidate[0]['email'] ?>" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 col-xs-5 control-label">Passe</label>
                                    <div class="col-md-9 col-xs-7">
                                        <input type="text" value="<?= $curentCandidate[0]['password'] ?>" class="form-control"/>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-6 col-sm-8 col-xs-7">

                    <form action="#" class="form-horizontal">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3><span class="fa fa-pencil"></span> Profil</h3>
                                <p>vous pouvez changer votre informations.</p>
                            </div>
                            <div class="panel-body form-group-separated">
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-5 control-label">Prenom</label>
                                    <div class="col-md-9 col-xs-7">
                                        <input type="text" value="<?= $curentCandidate[0]['prenom']?>" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-5 control-label">Nom</label>
                                    <div class="col-md-9 col-xs-7">
                                        <input type="text" value="<?= $curentCandidate[0]['nom'] ?>" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-5 control-label">CIN</label>
                                    <div class="col-md-9 col-xs-7">
                                        <input type="text" value="<?= $curentCandidate[0]['cin'] ?>" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-5 control-label">Naissance</label>
                                    <div class="col-md-9 col-xs-7">
                                        <input type="text" value="<?= $curentCandidate[0]['dateNaiss'] ?>" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-5 control-label">Téléphone</label>
                                    <div class="col-md-9 col-xs-7">
                                        <input type="text" value="<?= $curentCandidate[0]['telephone'] ?>" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-5 control-label">Adresse</label>
                                    <div class="col-md-9 col-xs-7">
                                        <input type="text" value="<?= $curentCandidate[0]['adress'] ?>" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 col-xs-5">
                                        <button class="btn btn-primary btn-rounded pull-right">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-default form-horizontal">
                        <div class="panel-body">
                            <h3><span class="fa fa-info-circle"></span> Quick Info</h3>
                            <p>Some quick info about this user</p>
                        </div>
                        <div class="panel-body form-group-separated">
                            <div class="form-group">
                                <label class="col-md-4 col-xs-5 control-label">Last visit</label>
                                <div class="col-md-8 col-xs-7 line-height-30">12:46 27.11.2015</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-xs-5 control-label">Registration</label>
                                <div class="col-md-8 col-xs-7 line-height-30">01:15 21.11.2015</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-xs-5 control-label">Groups</label>
                                <div class="col-md-8 col-xs-7">administrators, managers, team-leaders, developers</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-xs-5 control-label">Birthday</label>
                                <div class="col-md-8 col-xs-7 line-height-30">14.02.1989</div>
                            </div>
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
<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->
<script type="text/javascript" src="../asset/js/plugins.js"></script>
<script type="text/javascript" src="../asset/js/actions.js"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
</body>
</html>