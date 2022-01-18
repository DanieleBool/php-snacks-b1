<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa
del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$match = [
    [
        "squadraCasa" => "Olimpia Milano",
        "squadraOspite" => "Cantù",
        "puntiCasa" => 55,
        "puntiOspite" => 60,
    ],
    [
        "squadraCasa" => "Varese",
        "squadraOspite" => "Virtus Bologna",
        "puntiCasa" => 60,
        "puntiOspite" => 80,
    ],
    [
        "squadraCasa" => "Treviso",
        "squadraOspite" => "Reyer Venezia",
        "puntiCasa" => 70,
        "puntiOspite" => 40,
    ],
    [
        "squadraCasa" => "Virtus Roma",
        "squadraOspite" => "V.L. Pesaro",
        "puntiCasa" => 54,
        "puntiOspite" => 45,
    ],
    [
        "squadraCasa" => "Axilium Torino",
        "squadraOspite" => "Stella Azzurra",
        "puntiCasa" => 56,
        "puntiOspite" => 70,
    ],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>Punteggi</h1>
    <ul>
        <?php
            for($i=0; $i < count($match); $i++) {
                echo "<li>{$match[$i]["squadraCasa"]} - {$match[$i]["squadraOspite"]} | {$match[$i]["puntiCasa"]} - {$match[$i]["puntiOspite"]}</li>";
            }    
        ?>
    </ul>
</body>
</html>