
<?php
session_start();
require_once '../classes/MysqlDb.php';
require_once '../classes/Sujet.php';
if (isset($_SESSION['id'])) {
$sujets = new Sujet();
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
    <link rel="stylesheet" type="text/css" id="theme" href="../asset/css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>
<!-- START PAGE CONTAINER -->
<div class="page-container page-navigation-top">
    <!-- PAGE CONTENT -->
    <div class="page-content">

        <?php require_once '../includes/menuCandidat.php' ?>
        <div class="page-title">
            <h2><span class="fa fa-arrow-circle-o-left"></span> Accuiel</h2>
        </div>

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-8 col-lg-offset-2">
                    <!-- START DEFAULT WIZARD -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Default Wizard</h3>
                            <form action="../scripts/ajouterProjet.php" method="post" id="profilpost" name="profil" enctype="multipart/form-data">
                                <div class="wizard">

                                    <ul>
                                        <li>
                                            <a href="#step-1">
                                                <span class="stepNumber">1</span>
                                                <span class="stepDesc">Etape 1<br/><small>Identification du projet</small></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-2">
                                                <span class="stepNumber">2</span>
                                                <span class="stepDesc">Etape 2<br/><small>Equipements</small></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-3">
                                                <span class="stepNumber">3</span>
                                                <span class="stepDesc">Etape 3<br/><small>Coéquipier</small></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="step-1">
                                        <h4>Identification du projet</h4>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Titre</label>
                                            <input type="text" class="form-control" name="titreProjet"
                                                   id="exampleInputEmail1" placeholder="titre projet">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Sujet</label>
                                            <select name="sujetId" class="form-control" id="sujetName" title="Nom du sujet">
                                                <?php foreach ($sujets->getAllSubject() as $value): ?>
                                                    <?php
                                                    if (isset($_GET['id_subjet'])) {
                                                        if ($value['id_sujet'] == $_GET['id_subjet']) {
                                                            $nameSubject = $value['nom_sujet'];
                                                            ?>
                                                            <option value="<?= $_GET['id_subjet'] ?>" selected>
                                                                <?= $nameSubject ?>
                                                            </option>
                                                            <?php
                                                        }
                                                    } else {
                                                        ?>
                                                        <option value="<?= $value['id_sujet'] ?>">
                                                            <?= $value['nom_sujet'] ?>
                                                        </option>
                                                    <?php } ?>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Objectif</label>
                                        <textarea class="form-control" name="objectif" rows="3"
                                                  placeholder="Vos Objecif"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Durée du projet</label>
                                            <input type="text" class="form-control" name="dureeProjet"
                                                   id="exampleInputEmail1" placeholder="duree du projet">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Budget</label>
                                            <input type="text" class="form-control" name="budgetProjet"
                                                   id="exampleInputEmail1" placeholder="budget du projet">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">priorité</label>
                                            <select name="select" class="form-control">
                                                <option value="non" selected>non</option>
                                                <option value="urgent">urgent</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Résumé</label>
                                            <input type="file" class="form-control" name="pdfResume"
                                                   id="exampleInputEmail1" placeholder="Nom d'equipement">
                                        </div>
                                    </div>
                                    <div id="step-2">
                                        <h4>Equipements</h4>
                                        <div class="equipement">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nom Equipement</label>
                                                <input type="text" class="form-control titre" name="equipementName"
                                                       id="exampleInputEmail1" placeholder="Votre Equipement">
                                            </div>
                                            <div class="form-group">
                                                <p>Type :
                                                    <select name="selecttype" class="form-control">
                                                        <option value="disponible">Disponible</option>
                                                        <option value="non diponible" selected>Non Disponible</option>
                                                    </select>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="ajoutSupprimerEquipement">
                                            <a href="javascript:;" title="Ajouter un equipement"
                                               class="ajoutEquipement btn btn-warning" rel="equipement">Ajoute
                                                equipement</a>
                                            <a href="javascript:;" title="Supprimer un equipement"
                                               class="supprimerEquipement btn btn-warning" rel="equipement">Suprimme
                                                equipement</a>
                                        </div>
                                    </div>
                                    <div id="step-3">
                                        <h4>Equipes</h4>
                                        <div class="coequipier">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nom </label>
                                                <input type="text" class="form-control titre" name="nom_coequipier"
                                                       id="exampleInputEmail1" placeholder="Nom Coequipier">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Prenom</label>
                                                <input type="text" class="form-control titre" name="prenom_coequipier"
                                                       id="exampleInputEmail1" placeholder="Prenom Coequipier">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Role</label>
                                                <input type="text" class="form-control titre" name="role_coequipier"
                                                       id="exampleInputEmail1" placeholder="Role Coequipier">
                                            </div>
                                        </div>
                                        <div class="ajoutSupprimerCoequipier">
                                            <a href="javascript:;" title="Ajouter un coequipier"
                                               class="ajoutCoequipier btn btn-warning" rel="coequipier">Ajouter coéquipier</a>
                                            <a href="javascript:;" title="Supprimer un coequipier" class="supprimerCoequipier btn btn-warning" rel="coequipier">Suprimer coéquipier</a>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END DEFAULT WIZARD -->
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
<script type="text/javascript" src="../asset/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>
<script type="text/javascript" src="../asset/js/plugins/jquery-validation/jquery.validate.js"></script>
<script src="../assets/addInputs.js"></script>
<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->
<script type="text/javascript" src="../asset/js/plugins.js"></script>
<script type="text/javascript" src="../asset/js/actions.js"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->

</body>
</html>
    <?php

} else {
    header('location: ../loginPage.php');
}
?>