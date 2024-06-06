<?php
session_start();
$i = 0;

if (!isset($_SESSION['name'])){
    $_SESSION['name']=[];
}



foreach($_SESSION['name'] as $value){
    $i++;
}

$_SESSION['name'][$i+1] = $_POST;

foreach($_SESSION['name'] as $value){
    echo $value["name"] .  "</br>";
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
    <form action="" method="post">
    <input type="text" name="name" id="">
    <button type="submit" value="Envoyer">Envoyer</button>
    </form>
</body>
</html>