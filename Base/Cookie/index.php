<?php
    // Create Cookie

    $nameCookie = "user";

    $ValueCookie = "hainv";

    setcookie($nameCookie, $ValueCookie, time()+(886400), "/");

    //check Cookie

    if (isset($_COOKIE[$nameCookie])) {
        echo "Cookie" . $nameCookie . "da ton tai";
    }
    else {
        echo $nameCookie . "da bi xoa bo";
    }

?>