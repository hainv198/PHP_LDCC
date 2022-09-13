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

    $userName = "hainv";
    $password = "12345";
    /*$a = $_POST['name'];
    $b = $_POST['number'];*/
//    $sum = $a + $b ;

    if (!empty($_POST)) {
        $userName = $_POST['name'];
        $password = $_POST['number'];
        echo checkLogin($userName, $password);
    }


    function checkLogin ($userName, $password) {
        if ($userName == "hainv" && $password == "12345"){
            return "Login thanh cong";
        }else {
            return "login khong thanh cong";
        }
    }
//    echo sum($a, $b);
?>


<form action="form.php" method="post">
   Num_1 <input type="text" name="name"> <br>
   Num_2 <input type="password" name="number"> <br>
    <input type="submit">
</form>
</body>
</html>
