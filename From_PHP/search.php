<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $result = $_POST["search"];
        if ($result == "hainv") {
            echo "Pro me no roi";
        }else if ($result == "chi") {
            echo "chi biet gi ve lap trinh dau";
        }
        else {
            echo "vui long nhap dung gia tri";
        }
    }
?>

<form action="search.php" method="post">
    <label>Name</label>
    <input type="text" name="search"><br>
    <input type="submit">
</form>
