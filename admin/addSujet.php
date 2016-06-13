<?php
session_start();

require_once '../classes/MysqlDb.php';
require_once '../classes/Categorie.php';

$categiries = new Categorie();
?>
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
<?php require_once '../includes/menuAdmin.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="../scripts/ajouterSujet.php" method="post" id="profilpost" name="profil">
                <div class="container-fluid">
                    <div data-wizard-init>
                        <div class="steps-content">
                            <div data-step="1">
                                <h1>identification du projet</h1>
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
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>