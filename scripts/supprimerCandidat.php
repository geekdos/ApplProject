<?php
function __autoload($class){
    return require_once '../classes/'.$class.'.php';
}
if (isset($_GET['id_personne'])){
    $personne = new Personne();
    $personne->setIdPersonne(intval($_GET['id_personne']));
    $personne->deletePersonneById();
    header('location: ..');
}