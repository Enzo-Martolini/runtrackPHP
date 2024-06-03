<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des nombres</title>
    <style>
        .italic {
            font-style: italic;
        }
        .underline {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    for ($i = 0; $i <= 100; $i++) {
        if ($i >= 0 && $i <= 20) {
            echo "<p class='italic'>$i</p>";
        } elseif ($i >= 25 && $i <= 50) {
            if ($i == 42) {
                echo "<p class='underline'>La Plateforme_</p>";
            } else {
                echo "<p class='underline'>$i</p>";
            }
        } else {
            if ($i == 42) {
                echo "<p>La Plateforme_</p>";
            } else {
                echo "<p>$i</p>";
            }
        }
    }
    ?>
</body>
</html>
