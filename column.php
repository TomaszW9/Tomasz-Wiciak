<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <select name="S_T">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'ratownictwo');
            $q = 'SHOW TABLES;';
            $result = mysqli_query($conn, $q);
            while($row = mysqli_fetch_row($result)){
                echo '<option> '.$row[0].' </option>';
            }
            mysqli_close($conn);
            ?>
        </select>
        <button name='btn_T'>Button</button>
    </form>

    <?php
    $Table = $_POST['S_T'];
    ?>

    <form method="post">
        <select name="S_C">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'ratownictwo');
            $q = 'SHOW COLUMNS FROM '.$Table.';';
            $result = mysqli_query($conn, $q);
            while($row = mysqli_fetch_row($result)){
                echo '<option> '.$row[0].' </option>';
            }
            mysqli_close($conn);
            ?>
        </select>
        <button name='btn_C'>SHOW</button>
    </form>

    <?php
    $Column = $_POST['S_C'];

    $conn = mysqli_connect('localhost', 'root', '', 'ratownictwo');
    $q = 'SELECT '.$Column.' FROM'.$Table.';';
    $result = mysqli_query($conn, $q);
    while($row = mysqli_fetch_row($result)){
        echo $row[0];
    }
    mysqli_close($conn);
    ?>
</body>
</html>