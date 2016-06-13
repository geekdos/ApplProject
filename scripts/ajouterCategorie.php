<?php
if (isset($_POST['saveCat'])){
    require_once '../classes/MysqlDb.php';
    require_once '../classes/Categorie.php';

    $nom_categorie = htmlentities(trim($_POST["nomCategorie"]));


    $categorie = new Categorie();
    $categorie->setNomCategorie($nom_categorie);
    
    $categorie->addCategorie();

    

    header('location: ../admin/listEvaluator.php');
}
