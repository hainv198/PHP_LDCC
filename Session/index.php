<?php
    //create session
    $userName = "haimv";
    $password = "12345";
    $value = array($userName, $password);
    session_start();

    $values = $_SESSION["name"]= $value;
    var_dump($values);

    //delete Session
    //delete one
    unset($_SESSION['name']);
//    delete all
    session_destroy();


?>
