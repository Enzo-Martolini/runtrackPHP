<?php 
    function phraseAfficher () {
        if (isset($_POST)) {
            if ($_POST["username"]==="John" && $_POST["password"]==="Rambo"){
                echo "Ce n'était pas ma guerre";
            } else {
                echo "Votre pire cauchemar";
            }

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
    <form method="post" action="">
        <input type="text" name="username" placeholder="Votre nom">
        <input type="password" name="password" placeholder="Votre mot de passe">
        <input type="submit" value="Envoyer">
    </form>

    <?php phraseAfficher() ?>
</body>
</html>