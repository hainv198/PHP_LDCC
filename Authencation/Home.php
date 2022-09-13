<?php

    session_start();
    if (!isset($_SESSION['email'])) {
        header('location:SignIn.php');
    }
//    echo $_SESSION['email'];
    /*if (isset($_POST['logout'])) {
        if (isset($_SESSION['email'])) {
            unset($_SESSION['email']);
        }
        header('location:SignIn.php');
    }
    return*/
?>
<h1>Home Page</h1>
<ul>
    <li><a href="./Home.php">Home</a></li>
    <li><a href="Home.php?page_layout=Products">Products</a></li>
    <li><a href="Home.php?page_layout=Contact">Contact</a></li>
    <li><a href="Home.php?page_layout=About">About</a></li>
</ul>
<a href="logout.php" >
    <button type="submit" name="logout">Logout</button>
</a>
<?php
    if (isset($_GET['page_layout'])) {
        switch ($_GET['page_layout']) {
            case 'Products';
            include "../Page/Products.php";
            break;

            case 'Contact';
            include "../Page/Contact.php";
            break;

            case 'About';
            include "../Page/About.php";
            break;
        }
    }
?>
