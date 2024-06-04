<?php
if (isset($_POST['Send'])) {
    // Recuperation des donnees de mon formulaire
    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $prix = $_POST['prix'];
    
    if (!empty($name) && !empty($qty) && !empty($prix)) {
        // Redirect with query parameters
        header("Location: http://your-node-server-address:your-port/display?name=$name&qty=$qty&prix=$prix");
        exit();
    } else {
        echo "Please fill all the information.";
    }
}
?>