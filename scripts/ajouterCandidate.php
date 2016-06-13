<?php
if (isset($_POST['save'])){
    require_once '../classes/MysqlDb.php';
    require_once '../classes/Personne.php';
    require_once '../classes/Candidat.php';
    require_once '../classes/Formation.php';
    require_once '../classes/Experience.php';

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
    $cv = $_FILES['cvCandidate'];


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
    $lastId = $person->insertPerson();
    if ($lastId){
        $candidate = new Candidat();
        $candidate->setIdPersonne($lastId);
        $candidate->setCv($cv);

        $lastId1 = $candidate->insertCandidate();
    }
    if ($lastId1){

        $formations = array(
            array(
                'nom_formation' => $_POST["formation"],
                'diplome' => $_POST["diplome"],
                'id_candidat' => $lastId1,
            ),
        );

        $i = 1;
        while (isset($_POST["formation".$i])){
            $formations[$i] =
                array(
                    'nom_formation' => $_POST["formation".$i],
                    'diplome' => $_POST["diplome".$i],
                    'id_candidat' => $lastId1,
                );
            $i++;
        }
    }

    foreach ($formations as $values){
        $formation = new Formation();
        $formation->setInfoFromation($values);
        $formation->addFormation();
    }

    if ($lastId1){

        $experiences = array(
            array(
                'nom_experience' => $_POST["experionce"],
                'discription' => $_POST["description"],
                'id_candidat' => $lastId1,
            ),
        );

        $j = 1;
        while (isset($_POST["formation".$j])){
            $experiences[$j] =
                array(
                    'nom_experience' => $_POST["experionce".$j],
                    'discription' => $_POST["description".$j],
                    'id_candidat' => $lastId1,
                );
            $j++;
        }
    }

    foreach ($experiences as $values){
        $experience = new Experience();
        $experience->setInfoExperience($values);
        $experience->addExperience();
    }

    $candidate->sendMail();

    header('location: ../loginPage.php');
}
