<?php
date_default_timezone_set('America/Toronto');
$tableauheure =[];
$heure =[] ;
$minute =[];
$h = date("H");
$min = date("i");
for($i = 0 ; $i < 60 ;$i++){
    $tableauheure[] =[];
    for($j = 0 ; $j < 23 ;$j++){
    $tableauheure[$i][] =  $j." ".$i;
   }
}

$tableauheure[$min][$h] = "X";









?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        

        table {
            margin: auto;
        }

        td , tr {
            border: 2px solid gray;
            min-width: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    
            <table>
            <?php for ($i = 0; $i < count($tableauheure); $i++) {?>
                <tr>
                    <?php for ($j = 0; $j < 23; $j++) {?>
                        <td> <?= $tableauheure[$i][$j]; ?> </td>
                    <?php } ?>
                </tr>
                <?php } ?>
            </table>
    
</body>
</html>


<?php ?>


