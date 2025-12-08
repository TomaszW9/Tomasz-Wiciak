<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        Username: <input type="text" name='user'> <br>
        Password: <input type="text" name='pass'> <br>
        <button name='LogInBtn'>Zaloguj się</button>
    </form>

    <?php
    if(isset($_POST['LogInBtn'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $conn = mysqli_connect('localhost', 'root', '', 'SocialM');
        $q = 'SELECT user, password FROM users WHERE user = "'.$user.'" AND password = "'.$pass.'";';
        $result = mysqli_query($conn, $q);
        if(mysqli_fetch_row($result)[0] != NULL){
            header('Location:MainP.php');
        }else{
            echo 'Nie ma takiego użytkownika.';
        }
    }
    ?>
</body>
</html>