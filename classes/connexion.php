<?php
if (isset($_POST['connexion'])){
   // $db = new mysqlDb('mysql.hostinger.fr', 'u896894779_geek', 'dina123456', 'u896894779_ens');
    
    $login = html_entity_decode(trim($_POST['login']));
    $mdpas = $_POST['mdpasse'];
    $mdpas = md5($mdpas);

    require_once '../mysql/mysqlDb.php';
    $db = new mysqlDb('localhost', 'root', '', 'ens_data_base');
    $resulta = $db->get('utilisateurs');

        foreach ($resulta as $vale){
          if($vale['login'] === $login && $vale['mdpasse'] === $mdpas){
              //print_r($vale);
            $val = $vale['login'];
            $mdp = $vale['mdpasse'];
            $id_user = $vale['id_user'];
          }
        }
        if(isset($val) && isset($mdp) && isset($id_user)){
            
            session_start();
            $_SESSION['id'] = $id_user;
            
            header('location:app_profile_etd/dashboard.php');
        }else {
            header('location:errer.html');
            exit();
        }
}else {
    header('location:index.php');
}
