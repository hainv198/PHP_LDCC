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

<!--PHP-->

    <?php

    $ErrMessage = "";
    if( $_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['username'])) {
            $ErrMessage = "Khong duoc de trong";
        } else {

        }
    }

    ?>

<!--End PHP-->
<form action="main.php" method="post" name="form">
    User
    <input type="text" name="username">
    <span class="error">
        <?php echo $ErrMessage ?>
    </span>
    <br>
    Password
    <input type="text" name="password">
    <br>
    Date <input type="date">
    <br>
    Sex <input type="radio" name="sex" value="male" >Male
        <input type="radio" name="sex" value="female">Female <br>
    Agree <input type="checkbox" name="Agree" value="check"> <br>
    Country
    <select name="country" id="">
        <option value="vn">VN</option>
        <option value="en">EN</option>
        <option value="tl">TL</option>
    </select>
    <br>
    Message <textarea name="message" id="" >
        Message ...!
    </textarea><br>
    <input type="submit" name="btn" value="sendmail">
</form>


</body>
</html>


