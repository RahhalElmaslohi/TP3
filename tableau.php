<?php
$tableauheure =[];
$heure = date("h");
$minute = date("m");

for($i = 0 ; $i < 12 ;$i++){
    $tableauheure[] =[];
    for($j = 0 ; $j < 60 ;$j++){

    $tableauheure[$i][] =  $i." ".$j;
    
    echo $tableauheure[$i][$j];
    echo count($tableauheure);
   }
       }
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
    <?php 
    for($i = 0; $i < count($tableauheure[$i]);$i++ ) {
        echo "<tr>";
        for($j = 0; $j < count($tableauheure[$j]);$j++ ) {
            echo "<td>".$tableauheure[$i][$j]."</td>";


        }
        echo"</tr>";
    }
    
        ?>
    
    </table>
    
</body>
</html>