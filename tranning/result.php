<?php

if (isset($_POST['btn'])) {
    $a = $_POST['num_a'];
    $b = $_POST['num_b'];
    $c = $_POST['num_c'];

    function Calculation ($a,$b,$c) {
        if ($a == "") return $a = 0;
        if ($b == "") return $b = 0;
        if ($c == "") return $c = 0;
        echo "phuong trinh : " .$a . "x2 + " . $b . "x + " . $c ."= 0";
        echo "<br/>";
        if ($a == 0) {
            if ($b == 0 ) {
                echo "Phuong trinh vo nghiem";
            }else {
                echo "phuong trinh co mot nghiem :" . "x = ". (-$c / $b);
            }
            return ;
        }
        // tinh delta
        $delta = $b * $b - 4 * $a * $c;
        $x1 = "";
        $x2 = "";
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "phuong trinh co 2 nghiem la : " . "x1 =" . $x1 . "x2 =" . $x2;
        }elseif ($delta == 0) {
            $x1 = (-$b / 2*$a);
            echo "phuong trinh co nghiem kep x1 = x2 :" .$x1;

        }else {
            echo "phuong trinh vo nghiem";
        }
    }
    echo Calculation($a,$b,$c);
}else {
    echo "vui long kiem tra lai";
}


?>