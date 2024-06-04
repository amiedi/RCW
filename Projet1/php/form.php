<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post">
        <label for="nom"> Nom :</label><br><br>
        <input type="text" id="nom" name="nom">
        <label for="prix"> Prix: </label><br><br>
        <input type="text" id="prix" name="prix">
        <label for="quantity"> Quantity: </label><br><br>
        <input type="number" id="quantity" name="quantity">
        <input type="submit" value="Submit">
    </form>
</body>



</html>
<?php

if (isset($_POST['Submit'])) {
// recuperation des donnees de mon formulaire
$nom= $_POST['nom'];
$prix = $_POST['prix'];
$quantity = $_POST['quantity'];
if (!empty($nom) && !empty($prix) && !empty($quantity) ){

   echo($nom);
}

else{ echo "fill all the informations please";}
}


// verification des donnees

?>