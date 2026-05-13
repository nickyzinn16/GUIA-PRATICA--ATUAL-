<?php
    $host = "localhost";
    $user = "asibd";
    $password = "asibd#12";
    $db = "login_system_db";

    $conn = new mysqli($host, $user, $password, $db);

    if($conn->connect_error){
        die("Erro de Acesso".$conn->connect_error);
    }
?>