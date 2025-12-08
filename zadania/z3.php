<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .long{
            width: 100px;
            height: 50px;
        }
        .high{
            height: 100px;
            width: 33px;
            float: left;
        }
        .small{
            height: 1px;
            width: 1px;
        }
        #red{
            background-color: red;
        }
        #blue{
            background-color: blue;
        }
        #green{
            background-color: green;
        }
    </style>
</head>
<body>
    <a href="z1.php">HOME</a>

    <div class='long' id='red'></div>
    <div class='long' id='blue'></div>
    <br>
    <div class='high' id='red'></div>
    <div class='high' id='blue'></div>
    <div class='high' id='green'></div>

    <?php
    for($i=0;$i<50;$i++){
        for($j=0;$j<50;$j++){
            if($i==24||$i==25||$j==24||$j==25){
                echo "<p class='small' id='green'></p>";
            }else{
                echo "<p class='small' id='red'></p>";
            }
        }
        echo "<br>";
    }
    ?>
    
</body>
</html>