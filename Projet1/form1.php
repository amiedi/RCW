<!-- <?php
// if (isset($_POST['Send'])) {
//     // Récupération des données du formulaire
//     $name = $_POST['name'];
//     $qty = $_POST['qty'];
//     $prix = $_POST['prix'];
    
//     if (!empty($name) && !empty($qty) && !empty($prix)) {
//         // URL du serveur Node.js
//         $url = 'http://localhost:3000/display';
        
//         // Données à envoyer
//         $data = array('name' => $name, 'qty' => $qty, 'prix' => $prix);
        
//         // Utilisation de cURL pour envoyer une requête POST
//         $options = array(
//             'http' => array(
//                 'header'  => "Content-type: application/json\r\n",
//                 'method'  => 'POST',
//                 'content' => json_encode($data),
//             ),
//         );
//         $context  = stream_context_create($options);
//         $result = file_get_contents($url, false, $context);
//         if ($result === FALSE) {
//             die('Erreur lors de l\'envoi des données');
//         }
        
//         echo $result;
//     } else {
//         echo "Veuillez remplir toutes les informations.";
//     }
// }
?> -->

<form method="post" action="http://localhost:3000/submit">
    <div class=" box">
        <div class="container">
            <div class="top-header">
                <header>Créer un produit</header>
            </div>
            <div class="input-field">
                <input type="text" class="input" id="name" name="name" placeholder="Nom" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                <input type="number" class="input" id="qty" name="qty" placeholder="Quantité" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="text" class="input" id="prix" name="prix" placeholder="Prix" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="submit" class="submit" name="Send" value="Créer un produit">
            </div>
        </div>
    </div>
</form>