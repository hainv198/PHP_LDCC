
<?php
    // khai bao bien
    $numberOne = 123;
    $numberTwo = 234;
    $count = $numberOne + $numberTwo;
    echo $count;

    // khai báo hằng
  /*  define("message", "10", true);
    echo message;*/

    //
    if ($numberTwo < $numberOne) {
        echo "Sum = $count ";
    }else {
        echo "check value";
    }
    echo "</br>";
    $address = "32 dong me me tri nam tu liem ";
    // dem do dai choi
    echo strlen($address);
    //dem so luong tu
    echo str_word_count($address);
    //dao nguoc chuoi
    echo strrev($address);
    echo "</br>";
    // cat chuoi
    echo substr($address, 20);
    echo "</br>";
    // tim chuoi tra ve index cua phan tu
    echo strpos($address, "liem");
    echo "</br>";
    //thay the chuoi
    echo str_replace("32", "43", $address);
    echo "</br>";

    $color = "black";

    switch ($color) {
        case "black";
            echo "mau nen la $color";
            break;
        case "red";
            echo "color is $color";
            break;
    }
    echo "</br>";
    // for
    $i = 0;
    for ($i; $i < 20; $i++) {
        for ($j = (20 - $i); $j < 20; $j++) {
            echo "*";
        }
        echo"</br>";
    }

    // kt so nguyen to
echo "</br>";
    $n = [2, 3, 5, 7, 11, 13, 17];
    function isPrimeNumber($n) {
        if ($n < 2) {
            return false;
        }
        // check so ngto khi n >= 2
        $Root = sqrt ($n);
        for($i = 2; $i < $Root; $i ++) {
            if ($n % $i == 0) {
                return false;
            }
        }
    }
isPrimeNumber($n);
    echo ("cac so ngto nho hon 100 la : </br>");
    for($i = 0; $i < 100; $i ++) {
        echo($i . " ");
    }
    // foreach
echo "</br>";
    $myArr = array('one', 'two');
    foreach ($myArr as $newArr) {
        echo($newArr);
    }
    // method array php
echo "</br>";
$myArr = array('11', 'two', 'ren', 'LDCC');
    echo count($myArr);
    for ($i = 0; $i < count($myArr); $i++) {
        echo $myArr[$i];
    }
// kiem tra bien so cos ton tai hay khong isset()
// ham isset() tra ve  gia tri true false
echo "</br>";
    $a = 10;
    if (isset($a)) {
        echo "ton tia";
    }


// function PHP
echo "</br>";
    function myApp ($numb1, $numb2) {
        $sum = $numb1 + $numb2;
        echo "thong bao tong: $sum ";
    }
    myApp(10, 11);
echo "</br>";
//

?>


