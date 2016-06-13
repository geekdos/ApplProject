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
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Project</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/app.css" rel="stylesheet">

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
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">La liste des categorie avec les sujets</h3>
            </div>
            <ul class="list-group">
                <?php $i = 1;
                foreach ($categorie->getAllCategories() as $values): ?>
                    <li class="list-group-item">
                        <div class="row toggle" <?= "id='dropdown-detail-".$i."' data-toggle='detail-".$i."'" ?>>
                            <div class="col-xs-10">
                                <?= $values['nom_categorie']; ?>
                            </div>
                            <div class="col-xs-2">
                                <?= "<a href='../scripts/supprimerCategorie.php?id_categorie=".$values['id_categorie']."' class='btn btn-danger btn-xs'>Supprimer</a>" ?>
                                <i class="fa fa-chevron-down pull-right"></i>
                            </div>
                        </div>
                        <div <?= "id='detail-".$i."'" ?>>
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
                    </li>
                    <?php $i++; endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/app.js"></script>
</body>
</html>
