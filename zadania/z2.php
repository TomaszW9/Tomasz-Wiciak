<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="z1.php">HOME</a>

    <form method="post">
        <select name="SEL">
            <option value="b">Bazy</option>
            <option value="t">Tabele</option>
            <option value="k">Kolumny</option>
        </select>
        <button name="btn">SHOW</button>
    </form>
    <br>

    <?php
    if(isset($_POST['btn'])){
        if($_POST['SEL'] == 'b'){
            $con = mysqli_connect('localhost', 'root', '');
            $q = 'SHOW DATABASES;';
            $result = mysqli_query($con, $q);
            while($row = mysqli_fetch_row($result)){
                echo $row[0].'<br>';
            }
        }if($_POST['SEL'] == 't'){
            $con = mysqli_connect('localhost', 'root', '', 'bank');
            $q = 'SHOW TABLES;';
            $result = mysqli_query($con, $q);
            while($row = mysqli_fetch_row($result)){
                echo $row[0].'<br>';
            }
        }if($_POST['SEL'] == 'k'){
            $con = mysqli_connect('localhost', 'root', '', 'bank');
            $q = 'SHOW COLUMNS FROM konto;';
            $result = mysqli_query($con, $q);
            while($row = mysqli_fetch_row($result)){
                echo $row[0].'<br>';
            }
        }
    }
    ?>
</body>
</html>