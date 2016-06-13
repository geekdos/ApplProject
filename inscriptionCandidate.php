<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <!-- META SECTION -->
    <title>Atlant - Responsive Bootstrap Admin Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
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

        <?php require_once 'includes/menu.php' ?>

        <div class="page-title">
            <h2><span class="fa fa-arrow-circle-o-left"></span> Accuiel</h2>
        </div>

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">

                                    <!-- START DEFAULT WIZARD -->
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h3>Default Wizard</h3>
                                            <form action="scripts/ajouterCandidate.php" method="post" id="profilpost" name="profil" enctype="multipart/form-data">
                                            <div class="wizard">

                                                <ul>
                                                    <li>
                                                        <a href="#step-1">
                                                            <span class="stepNumber">1</span>
                                                            <span class="stepDesc">Etape 1<br/><small>Information Personnel</small></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-2">
                                                            <span class="stepNumber">2</span>
                                                            <span class="stepDesc">Etape 2<br/><small>Information Professionnel</small></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-3">
                                                            <span class="stepNumber">3</span>
                                                            <span class="stepDesc">Etape 3<br/><small>Experience professionnel</small></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div id="step-1">
                                                    <h4>Information Personnel</h4>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nom</label>
                                                        <input type="text" class="form-control" name="nom" id="exampleInputEmail1" placeholder="Votre nom" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Prénom</label>
                                                        <input type="text" class="form-control" name="prenom" id="exampleInputEmail1" placeholder="Votre prénom" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">CIN</label>
                                                        <input type="text" class="form-control" name="cin" id="exampleInputEmail1" placeholder="Votre CIN" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Date de Naissance</label>
                                                        <input type="date" class="form-control" name="dateNaiss" id="exampleInputEmail1" placeholder="Votre Date de Naissance">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email</label>
                                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Votre Email" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Mot de passe</label>
                                                        <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="Votre Mot de Passe" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Confermation du Mot de passe</label>
                                                        <input type="password" class="form-control" name="cpassword" id="exampleInputEmail1" placeholder="Confirmé Votre Mot de passe" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Nationalité</label>
                                                        <input type="text" class="form-control" name="nationalite" id="exampleInputEmail1" placeholder="Votre Nationalité">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Adresse</label>
                                                        <input type="text" class="form-control" name="adress" id="exampleInputEmail1" placeholder="Votre Adresse">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Téléphone</label>
                                                        <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Votre Téléphone" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">CV</label>
                                                        <input type="file" class="form-control" name="cvCandidate" id="exampleInputEmail1" >
                                                    </div>
                                                </div>
                                                <div id="step-2">
                                                    <h4>Information Professionnel</h4>
                                                    <div class="formation">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Formation</label>
                                                            <input type="text" class="form-control titre" name="formation" id="exampleInputEmail1" placeholder="Votre Formation">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Diplôme</label>
                                                            <input type="text" class="form-control titre" name="diplome" id="exampleInputEmail1" placeholder="Votre Diplome">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="ajoutSupprimerFormation">
                                                        <a href="javascript:;" title="Ajouter une formation" class="ajoutFormation btn btn-warning" rel="formation">Ajoute formation</a>
                                                        <a href="javascript:;" title="Supprimer une formation" class="supprimerFormation btn btn-warning" rel="formation">Suprimme formation</a>
                                                    </div>
                                                </div>
                                                <div id="step-3">
                                                    <h4>Experience professionnel</h4>
                                                    <div class="exp">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Exeprience</label>
                                                            <input type="text" class="form-control titre" name="experionce" id="exampleInputEmail1" placeholder="Votre Exeprience">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Discription</label>
                                                            <textarea  class="form-control titre" name="description" id="exampleInputEmail1" rows="3" placeholder="Votre Discription"></textarea>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="ajoutSupprimerExp">
                                                        <a href="javascript:;" title="Ajouter une formation" class="ajoutExp btn btn-warning" rel="exp">Ajoute Experience</a>
                                                        <a href="javascript:;" title="Supprimer une formation" class="supprimerExp btn btn-warning" rel="exp">Suprimme Experience</a>
                                                        <button type="submit" class="btn btn-success">Enregistrer</button>
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
        <script type="text/javascript" src="asset/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="asset/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="asset/js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='asset/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="asset/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="asset/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>
        <script type="text/javascript" src="asset/js/plugins/jquery-validation/jquery.validate.js"></script>
        <script src="assets/addInputs.js"></script>
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="asset/js/plugins.js"></script>
        <script type="text/javascript" src="asset/js/actions.js"></script>
        <!-- END TEMPLATE -->
        <!-- END SCRIPTS -->
</body>
</html>






