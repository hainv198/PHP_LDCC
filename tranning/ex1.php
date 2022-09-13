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

    <div style="width: 500px; margin: auto;display: flex;justify-content: space-around;padding: 70px">
        <form action="ex1.php" method="post">
            <label>Number a</label>
            <input type="number" name="num_a">
            <br>
            <label>Number b</label>
            <input type="number" name="num_b">
            <br>
            <label>Number c</label>
            <input type="number" name="num_c">
            <br>
            <input type="submit"name="btn">
        </form>
        <div>
            <strong>
                <?php
                    include 'result.php';
                ?>
            </strong>
        </div>
    </div>

</body>
</html>
