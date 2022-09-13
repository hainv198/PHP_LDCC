<?php
    include_once "../OOP/Include/View/newClass.php";
    include_once "../OOP/Include/Controller/user.php";
    include_once "../OOP/Include/Controller/Employees.php";
    include_once "../OOP/Include/Controller/Category_Static.php";

    // autoload class
/*    spl_autoload_register('Loader');
    function Loader($className) {
        $path = "OOP/Include/Controller/";
        $extension = ".php";
        $full_path = $path.$className.$extension;
        include_once $full_path;
    }*/

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $render = new Employee();
        echo $render ->public;
    ?>
    <br>
    <?php
    echo $render ->get_private();
    ?>
    <br>
    <?php
    $newProduct = new Products();
    echo $render ->get_protected();
    echo"<br>";
    echo $newProduct -> extends_protected();
    ?>
    <hr>
    <?php
        $get_user = new user();
        $get_user -> info_user("Nguyen Van ","Hai");
        echo $get_user ->firstname; echo " ";
        echo $get_user ->lastname;
    ?>
    <hr>
    <?php
    // Construct object

    $get_Employee = new Employees("Nguyen Van Hai", "admin");

    echo $get_Employee ->users; echo " ";
    echo $get_Employee ->role;
    echo "<hr>";


    // Method Static
    $get_Category = new Category_Static();
    $get_Category ->set_name("Hainv");
    echo $get_Category ->get_name();

    ?>


</body>
</html>