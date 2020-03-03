<?php
// J'instancie l'objet clients
$clients = new clients();
// Appel de la méthode listClients créée dans le model
$customersWithLoyaltyCard = $clients->customersWithLoyaltyCard();
?>
