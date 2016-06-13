<?php
if (isset($_POST['save'])){
    require_once '../classes/MysqlDb.php';
    require_once '../classes/Personne.php';
    require_once '../classes/Evaluateur.php';

    $nom = htmlentities(trim($_POST["nom"]));
    $prenom = htmlentities(trim($_POST["prenom"]));
    $cin = htmlentities(trim($_POST["cin"]));
    $password = md5($_POST["password"]);
    $cpassword = htmlentities(trim($_POST["cpassword"]));
    $datenaissance = htmlentities(trim($_POST["dateNaiss"]));
    $email = htmlentities(trim($_POST["email"]));
    $nationnalite = htmlentities(trim($_POST["nationalite"]));
    $adress = htmlentities(trim($_POST["adress"]));
    $phone = htmlentities(trim($_POST["phone"]));
    $discipline = htmlentities(trim($_POST["discipline"]));
    $domainerecherche = htmlentities(trim($_POST["domainerecherche"]));
    $etablissementrattache = htmlentities(trim($_POST["etablissementrattache"]));
    $cv = $_FILES['cvEvaluateur'];

    $person = new Personne();
    $person->setNom($nom);
    $person->setPrenom($prenom);
    $person->setCin($cin);
    $person->setPassword($password);
    $person->setDateNaiss($datenaissance);
    $person->setEmail($email);
    $person->setNationalite($nationnalite);
    $person->setAdress($adress);
    $person->setTelephone($phone);
    $person->setType('evaluator');
    $lastId = $person->insertPerson();

    if ($lastId){
        $evaluator = new Evaluateur();
        $evaluator->setIdPersonne($lastId);
        $evaluator->setDiscipline($discipline);
        $evaluator->setDomainerecherche($domainerecherche);
        $evaluator->setEtablissementrattache($etablissementrattache);
        $evaluator->setCv($cv);
        //var_dump($evaluator);die();
        $evaluator->addEvaluator();
    }

    header('location: ../admin/listEvaluator.php');
}
