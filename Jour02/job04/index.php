<?php 

function affichePost () {
    foreach($_POST as $key => $value){
        echo "La clé est :" . $key . ". La valeur est " . $value . "</br>";
    }
}

affichePost();

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
    <form method="post" action="">
        <input type="text" name="nom" placeholder="Votre nom">
        <input type="text" name="prenom" placeholder="Votre prenom">
        <input type="text" name="age" placeholder="Votre age">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>