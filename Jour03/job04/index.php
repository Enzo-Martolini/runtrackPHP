<?php
session_start();

if (!isset($_SESSION['listeProduit'])) {
    $_SESSION['listeProduit'] = []; //Crée la var de session
}

function ajouteElement() {
    if (!empty($_POST['produit']) || !empty($_POST['quantite']) || !empty($_POST['prix'])) {
        array_push($_SESSION['listeProduit'], $_POST); //Ajoute le contenun de POST dans la variable de session
    }
}


function afficheArray() {
    foreach ($_SESSION['listeProduit'] as $produit) {
        $produitNom = htmlspecialchars($produit["produit"]);
        $quantite = htmlspecialchars($produit["quantite"]);
        $prix = htmlspecialchars($produit["prix"]);
        $total = $prix * $quantite;
        $totalAvecRemise = ($total > 100) ? $total * 0.9 : $total; //Si $total est suppérieur à 100 alors $total x 0.9 sinon $total (reste intacte)
        echo "Produit: $produitNom - Quantité: $quantite - Prix unitaire: $prix € - Total: " . number_format($totalAvecRemise, 2) . " €<br>";    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    ajouteElement();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
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
        <input type="text" name="produit" placeholder="Ajoutez un produit">
        <input type="number" name="quantite" placeholder="Ajoutez sa quantité">
        <input type="number" name="prix" placeholder="Ajoutez son prix">
        <input type="submit" value="Envoyer">
    </form>
    <div><pre>
        <?php
        var_dump($_SESSION['listeProduit'])
        //afficheArray(); ?></pre>
    </div>
</body>
</html>
