<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <select name="tables">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'restauracja');
            $q = 'SHOW TABLES';
            $query = mysqli_query($conn, $q);
            while($row = mysqli_fetch_row($query)){
                echo '<option>'.$row[0].'</option>';
            }
            mysqli_close($conn);
            ?>
        </select>
        <button name='btn1'>SHOW</button>
    </form>

    <form method="post">
        <?php
        $table = $_POST['tables'];
        $conn = mysqli_connect('localhost', 'root', '', 'restauracja');
        $q = 'SHOW COLUMNS FROM '.$table;
        $query = mysqli_query($conn, $q);
        echo '<table>';
        while($row = mysqli_fetch_row($query)){
            echo '<tr> <td>'.$row[0].'</td> <td>'.$row[1].'</td> <td>'.$row[2].'</td> </tr>';
        }
        echo '</table>';
        mysqli_close($conn);
        ?>
        <button name='btn1'>SHOW REC</button>
    </form>
</body>
</html>