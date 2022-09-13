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
    /*echo $_POST['username'];
    echo $_POST['password'];*/
    $messageError = "";
    //name dai dien cho value cuar gia tri nhap vao
    $name = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['username'])) {
            $messageError = "Khong dc de trong";
        }else {
            $name = $_POST['username'];
            if (!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/",$name)) {
                $messageError = "vui long nhap dungs dinh dang";
            }else {
                echo $name;
            }
        }
    }
    ?>

    <form action="index.php" method="post">
        <label>User Name</label>
        <input type="text" name="username">
        <span style="color: red">
            <?php echo $messageError;?>
        </span><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>




