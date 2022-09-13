<?php

    if (empty($_GET['mon'])) {
        include "../MVC/menu.php";
    }else {
        $mon = $_GET['mon'];
        include "../MVC/model.php";
        include "../MVC/result.php";
    }
?>

