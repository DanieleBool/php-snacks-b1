<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi 
che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto 
è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<!-- Dichiaro/prendo in input le variabili per lavorarci poi in html -->
<?php
$name = $_GET["name"];
$age = $_GET["age"];
$mail = $_GET["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div>Nome: <?php echo $name?></div>
    <div>Età: <?php echo $age?></div>
    <div>Mail: <?php echo $mail?></div>

    <?php
        if(strlen($name) > 3 && strpos($email, '.') !== false && strpos($email, '@') !== false && is_numeric($age) !== false ) {
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';
        };
    ?>
</body>
</html>