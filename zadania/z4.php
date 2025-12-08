<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="z1.php">HOME</a> <br><br>

    <form method="post">
        <button name="cre">CREATE</button>
        <button name="show">SHOW</button>
        <button name="del">DELETE</button>
    </form>

    <?php
    if(isset($_POST['cre'])){
        setcookie('nazwa', 'wartosc');
    }

    if(isset($_POST['show'])){
        echo $_COOKIE['nazwa'];
    }

    if(isset($_POST['del'])){
        setcookie('nazwa', 'wartosc', time()-1);
    }
    ?>
</body>
</html>