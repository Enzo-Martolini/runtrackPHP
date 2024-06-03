<?php 

$varInt = 34;
$varFloat = 3.4;
$varStr = "Hello world";
$varBool = true;
$varNull = null;

$tabHTML = "
    <tr>
        <td>Variable int <br><br> $varInt</td>
        <td>Variable float <br><br>$varFloat</td>
        <td>Variable str <br><br>$varStr</td>
        <td>Variable bool <br><br>$varBool</td>
        <td>Variable null <br><br>$varNull</td>
    </tr>

"

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
            width: 50%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <?= $tabHTML ?>
    </table>
</body>
</html>