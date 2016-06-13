<?php
    session_start();
    function __autoload($classname) {
        $filename = "../classes/". $classname .".php";
        require_once($filename);
    }
    
    $project = new Projet();
    $project->setIdCandidate($_SESSION['id_type']);
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
<?php require_once '../includes/menuCandidat.php' ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-striped custab">
                <thead>
                <tr class="text-center">
                    <th>Titre du Projet</th>
                    <th>Nom Sujet</th>
                    <th>Priorité</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <?php foreach ($project->getAllProjectByCandidateId() as $values): ?>
                    <tr>
                        <td><?= $values->getTitre(); ?></td>
                        <td><?= $values->getNomSujet(); ?></td>
                        <td><?= $values->getPriorite(); ?></td>
                        <td><?= $values->getStatus(); ?></td>
                        <td class="text-center">
                            <a href="<?= '../scripts/supprimerProjet.php?id_projet='.$values->getIdProjet() ?>" class="btn btn-danger btn-xs">
                                <span class="fa fa-recycle"></span> Supprimer
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
</div>
<script src="../assets/js/jQuery-2.1.4.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/app.js"></script>
</body>
</html>