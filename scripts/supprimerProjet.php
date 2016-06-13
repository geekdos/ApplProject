<?php
    function __autoload($class){
        return require_once '../classes/'.$class.'.php';
    }
    if (isset($_GET['id_projet'])){
        $project = new Projet();
        $project->setIdProjet(intval($_GET['id_projet']));
        $project->deleteProjectById();
        header('location: ../candidat/listProjet.php');
    }