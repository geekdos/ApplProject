<?php

    function __autoload($class){
    return require_once '../classes/'.$class.'.php';
}

    if (isset($_GET['id_sujet'] )){
        $sujet = new Sujet();
        $sujet->setIdSujet(intval($_GET['id_sujet']));
        //var_dump($sujet->getIdSujet());die();
        $sujet->deleteSujetById();
        header('location: ../admin/listCategorie.php');
    }