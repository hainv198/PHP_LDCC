<?php
    // ket noi database
    include "config.php";


    $sql = "select * from user";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        while ($value = mysqli_fetch_array($result)) {

            echo $value['id']. "<br>" . $value['firstname'] . "<br>" . $value['lastname']. "<br>" . $value['email'] . "<br>" . $value['reg_date'];
        }
    }

?>
