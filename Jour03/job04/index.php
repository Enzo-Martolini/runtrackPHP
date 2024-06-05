<?php
session_start();

if (!isset($_SESSION['listeProduit'])) {
    $_SESSION['listeProduit'] = [];
}

function ajouteElement() {
    if (!empty($_POST['produit']) || !empty($_POST['quantite']) || !empty($_POST['prix'])) {
        array_push($_SESSION['listeProduit'], $_POST);
    }
}

ajouteElement();
var_dump($_SESSION['listeProduit']);

function afficheArray() {
    foreach ($_SESSION['listeProduit'] as $produit) {
        echo "Produit: " . htmlspecialchars($produit["produit"]) ." - Quantité: " . htmlspecialchars($produit["quantite"]). " - Prix unit: " . htmlspecialchars($produit["prix"]) . "- Prix total: " . htmlspecialchars(($produit["prix"]*$produit["quantite"])) . "<br>";
    }
}

function reinitPost() {
    $_POST = [];
}
reinitPost();
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
        <input type="text" name="produit" placeholder="Ajoutez un produit">
        <input type="number" name="quantite" placeholder="Ajoutez sa quantité">
        <input type="number" name="prix" placeholder="Ajoutez son prix">
        <input type="submit" value="Envoyer">
    </form>
    <div>
        <?php afficheArray(); ?>
    </div>
</body>
</html>
