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
    $user_1 = "";
    $user_2 = "";
    $user_3 = "";
    $user_4 = "";
    $user_5 = "";

    if (isset($_POST['btn'])) {
        $user_1 = $_POST['user_1'];
        $user_2 = $_POST['user_2'];
        $user_3 = $_POST['user_3'];
        $user_4 = $_POST['user_4'];
        $user_5 = $_POST['user_5'];
        /*function myArr ($user_1, $user_2, $user_3, $user_4, $user_5) {


            for($i = 0; $i < count($myList) ; $i ++) {
                $table = $myList[$i];
                echo $table;
            }

        }*/
        $myList = array($user_1, $user_2, $user_3, $user_4, $user_5);
        sort($myList);
        for($i = 0; $i < count($myList); $i ++) {
            $result = $myList [$i] ;
            echo $result."<br> " ;
        }
    }else {
        echo "vui long nhap du ";
    }
    ?>
    <form action="ex2.php" method="post">
        <label>Person</label><br>
        <input type="text" name="user_1"><br>
        <input type="text" name="user_2"><br>
        <input type="text" name="user_3"><br>
        <input type="text" name="user_4"><br>
        <input type="text" name="user_5"><br>
        <input type="submit" name="btn">
    </form>
</body>
</html>