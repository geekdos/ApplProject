<?php

function __autoload($class){
    return require_once '../classes/'.$class.'.php';
}

if (isset($_GET['id_categorie'] )){
    $categorie = new Categorie();
    $categorie->setIdCategorie(intval($_GET['id_categorie']));
    //var_dump($categorie->getIdCategorie());die();
    $categorie->deleteCategorieById();
    header('location: ../admin/listCategorie.php');
}