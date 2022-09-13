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
        // call session
        session_start();
        if (isset( $_SESSION['email'])) {
            header('location: Home.php');
        }
        $messageErr = "";
        $email_val = "";
        if (isset($_POST['btn'])) {
            if (empty($_POST['email'])) {
                $messageErr = "vui long nhap gia tri";
            }else {
                $email_val = $_POST['email'];
                if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $email_val)) {
                    $messageErr = "vui long nhap dung dinh dang name@gmail.com";
                }
            }

            $email = $_POST['email'];
            $password = $_POST['password'];
            if ($email == "hainv@gmail.com" && $password == '12345') {
                // save session
                $_SESSION['email'] = $email;
                header('location:Home.php');
            }else {
                echo "vui long kiem tra lai tai khoan mat khau";
            }
        }
    ?>

    <form action="SignIn.php" method="post">
        <label>Email</label>
        <input type="email" name="email">
        <span>
            <?php echo $messageErr; ?>
        </span>
        <br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="btn"><br>
        <span>Don't have an account yet? <a href="SignUp.php">Sign Up</a></span>
    </form>
</body>
</html>
