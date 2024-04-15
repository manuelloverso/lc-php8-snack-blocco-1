<?php

/* 
Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name= $_GET['name'];
$email= $_GET['email'];
$age= $_GET['age'];


$email_check= false;

if (str_contains($email, '@') && str_contains($email, '.') ) {
    $email_check = true;
}
$validate= null;

if (strlen($name) > 3 && $email_check== true && is_numeric($age)) {
   $validate= 'Accesso riuscito';
} else{
    $validate= 'accesso negato';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input{
            display: block;
        }
    </style>
</head>
<body>
    <form action="" method="get"> 
        <input type="text" placeholder="Type your name" name="name">
        <input type="text" placeholder="Type your email" name="email" id="">
        <input type="text" placeholder="Type your age" name="age">
        <button type="submit">Submit</button>
        <h4><?= $validate ?></h4>
    </form>
</body>
</html>
