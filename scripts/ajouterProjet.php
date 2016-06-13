<?php
if (isset($_POST['save'])){
    session_start();
    require_once '../classes/MysqlDb.php';
    require_once '../classes/Projet.php';
    require_once '../classes/Coequipier.php';
    require_once '../classes/Equipement.php';

    $titre = htmlentities(trim($_POST["titreProjet"]));
    $sujet = htmlentities(trim($_POST["sujetId"]));
    $objectif = htmlentities(trim($_POST["objectif"]));
    $duree = htmlentities(trim($_POST["dureeProjet"]));
    $budget = htmlentities(trim($_POST["budgetProjet"]));
    $priorite = htmlentities(trim($_POST["select"]));
    $resume = $_FILES['pdfResume'];
    $id_type = $_SESSION['id_type'];
    $nomCoequipier = htmlentities(trim($_POST["nom_coequipier"]));
    $prenomCoequipier = htmlentities(trim($_POST["prenom_coequipier"]));
    $roleCoequipier = htmlentities(trim($_POST["role_coequipier"]));
    

    $projet = new Projet();
    $projet->setTitre($titre);
    $projet->setObjectif($objectif);
    $projet->setDuree($duree);
    $projet->setBudget($budget);
    $projet->setPriorite($priorite);
    $projet->setIdSujet(intval($sujet));
    $projet->setIdCandidate($id_type);
    $projet->setResume($resume);

    //var_dump($projet);die();

    $lastId = $projet->addProjet();

    if ($lastId){

        $coequipiers = array(
            array(
                'nom_coequipier' => $_POST["nom_coequipier"],
                'prenom_coequipier' => $_POST["prenom_coequipier"],
                'role_coequipier' => $_POST["role_coequipier"],
                'id_projet' => $lastId,
            ),
        );

        $i = 1;
        while (isset($_POST["nom_coequipier".$i])){
            $coequipiers[$i] =
                array(
                    'nom_coequipier' => $_POST["nom_coequipier".$i],
                    'prenom_coequipier' => $_POST["prenom_coequipier".$i],
                    'role_coequipier' => $_POST["role_coequipier".$i],
                    'id_projet' => $lastId,
                );
            $i++;
        }

        foreach ($coequipiers as $values){
            $coequipier = new Coequipier();
            $coequipier->setCoequipierInfos($values);
            $coequipier->addCoequipier();
        }

        $equipements = array(
            array(
                'nom' => $_POST["equipementName"],
                'type' => $_POST["selecttype"],
                'id_projet' => $lastId,
            ),
        );

        $i = 1;
        while (isset($_POST["equipementName".$i])){
            $equipements[$i] =
                array(
                    'nom' => $_POST["equipementName".$i],
                    'type' => $_POST["selecttype".$i],
                    'id_projet' => $lastId,
                );
            $i++;
        }

        foreach ($equipements as $values){
            $equipement = new Equipement();
            $equipement->setEquipementInfos($values);
            $equipement->addEquipement();
        }
    }

    header('location: ../candidat/index.php');
}
