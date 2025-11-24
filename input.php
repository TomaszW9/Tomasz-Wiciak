<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name='in1'>
        <input type="text" name='in2'>
        <button name='btn'>BUTTON</button>
    </form>
    
    <?php
    if(isset($_POST['btn'])){
        echo '<h1>'.$_POST['in1'].'</h1>';
        echo '<p>'.$_POST['in2'].'</p>';
    }
    ?>
</body>
</html>