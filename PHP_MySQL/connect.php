<?php
/*    $serverName = "localhost";
    $database = "root";
    $password = "";
    $dbname = "products";

    // Create connection
    $conn = new mysqli($serverName, $database, $password, $dbname);
    if ($conn) {
        echo"111";
    }
    if ($conn) {
        mysqli_query($conn, "SET NAMES 'utf8' ");
        echo "ket noi thanh cong";
    }else {
        echo "ket noi that bai";
    }

*/?>

<?php
    /*$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "students";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    //create new database
//    $sql = "CREATE DATABASE students";

    // Create table database

    $table = "create table user (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


    //truy van du lieu

    if (mysqli_query($conn, $table)) {
        echo "Database created successfully" ;
    }else {
        echo "Error: " . $table . "<br>" . mysqli_error($conn);
    }
//    mysqli_close($conn);*/

?>
