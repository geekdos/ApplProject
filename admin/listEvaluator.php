<?php
    session_start();
require_once '../classes/MysqlDb.php';
require_once '../classes/Personne.php';
require_once '../classes/Evaluateur.php';
    $evaluatro = new Evaluateur();
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
<?php require_once '../includes/menuAdmin.php' ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-striped custab">
                <thead>
                <tr>
                    <th>CIN</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Disipline</th>
                    <th>Domaine de recharche</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <?php foreach ($evaluatro->getAllEvaluators() as $values): ?>
                <tr>
                    <td><?= $values->getCin(); ?></td>
                    <td><?= $values->getNom(); ?></td>
                    <td><?= $values->getPrenom(); ?></td>
                    <td><?= $values->getEmail(); ?></td>
                    <td><?= $values->getDiscipline(); ?></td>
                    <td><?= $values->getDomainerecherche(); ?></td>
                    <td class="text-center">
                        <a class='btn btn-info btn-xs' href="#">
                            <span class="glyphicon glyphicon-edit"></span> Modifier</a>
                        <a href="<?= '../scripts/supprimerEvaluateur.php?id_personne='.$values->getIdPersonne() ?>" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-remove"></span> Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>