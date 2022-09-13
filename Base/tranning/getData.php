<?php
    $a = $_POST['name'];
    $b = $_POST['number'];
    $sum = $a + $b ;

    function sum ($a, $b) {
        return $a + $b;
    }
    echo sum($a, $b);

    echo readfile('text.txt')
?>
