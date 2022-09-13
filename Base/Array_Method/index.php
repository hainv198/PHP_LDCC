<?php
    $name = "hainv";
    // loc chuoi
    $newStr = filter_var($name, FILTER_SANITIZE_STRING);
    echo $newStr;

    //Loc so nguyen
    $num = 12345;
    if(!filter_var($num,FILTER_VALIDATE_INT == false )) {
        echo $num . "day la so nguyen";
    }else {
        echo $num . "khong phai so nguyen";
    }
?>

