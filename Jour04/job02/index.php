<?php 
session_start();

if (!isset($_COOKIE['nbVisite'])){
    setcookie("nbVisite", 0);
}

$nbVisite = $_COOKIE['nbVisite'] + 1;

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nbVisite = 0;
}

setcookie("nbVisite", $nbVisite);


// var_dump($_COOKIE['nbVisite']);

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

 <?= $_COOKIE['nbVisite'] ?>
 <form method="post" action="">
    <button type="submit">Reset</button>
 </form>
 <form method="" action="">
    <button type="submit">Incremente</button>
 </form>
    
</body>
</html>