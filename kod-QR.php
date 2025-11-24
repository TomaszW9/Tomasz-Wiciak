<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            height: 5px;
            width: 5px;
            padding: 0px;
        }
        .black{
            background-color:black;
        }
    </style>
</head>
<body>
    <?php
    echo '<table>';
    for($i=0;$i<50;$i++){
        echo '<tr>';
        for($j=0;$j<50;$j++){
            $x= rand(0,1);
            if($x==0){
                echo '<td class="white"></td>';
            }
            if($x==1){
                echo '<td class="black"></td>';
            }
        }
        echo '<tr>';
    }
    ?>
</body>
</html>

