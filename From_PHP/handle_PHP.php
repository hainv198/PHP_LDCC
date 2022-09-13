<?php

    // ham bat su kien == name cu the input submit
    if(isset($_POST['btn'])) {
        echo "thaays sai sai";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $value = $_POST['handle'];
        if ($value == "haicc") {
            echo "pro PHP";
        }else {
            echo "nhap lai di dm";
        }
    }
?>

<form action="handle_PHP.php" method="post">
    <label >Name</label>
    <input type="text" name="handle"><br>
    <input type="submit" name="btn">
</form>
