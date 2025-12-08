<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header></header>
    <main>
    <form method="post">
        Username: <input type="text" name='user'> <br>
        Password: <input type="text" name='pass'> <br>
        <button name='SignUpBtn'>Zarejestruj się</button>
    </form>

    <?php
    if(isset($_POST['SignUpBtn'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $conn = mysqli_connect('localhost', 'root', '', 'socialm');
        $q = 'INSERT INTO users(user, password) VALUES("'.$user.'", "'.$pass.'");';
        $q1 = 'SELECT user FROM users WHERE user = "'.$user.'";';
        $result = mysqli_query($conn, $q1);
        if(mysqli_num_rows($result)==0){
            mysqli_query($conn, $q);
            header('Location:MainP.php');
        }else{
            echo 'Taki użytkownik już istnieje.';
        }
    }
    ?>
    </main>
    <footer></footer>
</body>
</html>