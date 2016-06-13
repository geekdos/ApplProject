<?php
    require_once 'classes/MysqlDb.php';

    $db = new MysqlDB('localhost', 'root', '', 'appelprojet');

if ($db){
    echo "Bien Connecter";
}