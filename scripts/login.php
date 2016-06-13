<?php
if (isset($_POST['login']) && isset($_POST['password'])){
    require_once '../classes/MysqlDb.php';
    require_once '../classes/Login.php';
    require_once '../classes/Personne.php';

    $password = $_POST['password'];
    $username = htmlentities($_POST['login']);
    $login = new Login($username, $password);

    if ($login->seConnecter()){
        session_start();
        $_SESSION['id'] = $login->getId();
        $_SESSION['username'] = $login->getUsername();
        $_SESSION['password'] = $login->getPassword();
        $person = new Personne();
        $_SESSION['id_type'] = $person->getCandidateIdByPersonId($login->getId(), $login->getType());
        header('location: ../'.$login->getType().'/index.php');

    }else{
        $_SESSION['error'] = 'Email ou mot de passe incorecte';
        header('location: ../loginPage.php');
    }
}else{
    header("HTTP/1.0 404 Not Found");
    header('location: ../404.php');
}