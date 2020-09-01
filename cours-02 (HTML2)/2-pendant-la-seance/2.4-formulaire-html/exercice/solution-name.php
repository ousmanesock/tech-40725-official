<?php 
var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaires HTML</title>
</head>
<body>
    <!-- Balise parent du formulaire -->
    <form action="" method="POST">
        <!-- Premier champ avec son étiquette -->
        <label for="nom_item_id">Nom du produit</label>
        <input type="text" name="nom_item" id="nom_item_id" placeholder="ex. Souliers Nike"/>
        
        <!-- Deuxième champ avec son étiquette-->
        <label for="qte_item_id">Quantité d'items</label>
        <input type="number" name="quantite_item" id="qte_item_id" placeholder="ex. 3"/>
        
        <!-- Bouton de soumission -->
        <input type="submit" value="Soumettre la commande"/>
    </form>
</body>
</html>