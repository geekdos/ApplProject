<?php
if (isset($_POST['saveSubject'])){
    require_once '../classes/MysqlDb.php';
    require_once '../classes/Categorie.php';
    require_once '../classes/Sujet.php';

    $nom_subject = htmlentities(trim($_POST["subjectName"]));
    $id_categories = intval(htmlentities(trim($_POST["categoriesId"])));

    $subject = new Sujet();
    $subject->setNomSujet($nom_subject);

    $subject->addSubject($id_categories);

    header('location: ../admin/listEvaluator.php');
}
