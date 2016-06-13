<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php require_once '../includes/menuAdmin.php'?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>