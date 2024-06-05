<?php 
    function isPair () {
        if ($_GET["number"] != null) {
            if ($_GET["number"] % 2 === 0){
                echo "NOMBRE PAIR";
            } else {
                echo "NOMBRE IMPAIR";
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
    <form method="get" action="">
        <input type="number" name="number">
        <input type="submit" value="Envoyer">
    </form>

    <?php isPair() ?>
</body>
</html>