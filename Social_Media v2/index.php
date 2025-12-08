<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="" method="post">
        <button name='btn_log'>Zaloguj się</button>
        <button name='btn_sign'>Zarejestruj się</button>
    </form>

    <?php
    if(isset($_POST['btn_log'])){
        header('Location:log_in.php');
    }
    if(isset($_POST['btn_sign'])){
        header('Location:sign_up.php');
    }
    ?>
</body>
</html>