<?php
if (isset($_GET['dec'])){
    session_start();
    session_destroy();
    unset($_SESSION);
    header('location: ../index.php');
}