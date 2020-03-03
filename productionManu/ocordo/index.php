<?php
include 'indexctrl.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="shortcut icon" href="https://www.ocordo-travaux.fr/wp-content/uploads/favicon.png" />
       <!-- 1 link = permet d'avoir l'image dans l'onglet-->
       <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/spacelab/bootstrap.min.css" rel="stylesheet" integrity="sha384-sZG5VVk41YqhJjYXgJFoRVd3d2AdDgy4oyIytQJMGx/Mizz1N+5bgKQBSCGfKQnP" crossorigin="anonymous" />
       <!-- farmework css (bootstapt) permet de faire également du boostrap-->
       <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
              <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet" />
        <!-- permet de modifier les polices d'écriture-->
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Projet PHP</title>
    </head>
    <body>
        <!-- NavBar Bootswatch -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- NavBar Logo -->
            <!-- NavBar Etiquette -->
            <a class="navbar-brand mr-5" href="page-1.html">
                <img src="assets/img/logo.png" class="mr-2" width="60" height="60" alt="Logo NavBar" />
                Maçonnerie Ocordo
            </a>
            <!--  NavBar Menu Burger -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" 
                    aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- NavBar Liste des différents menus -->
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                    <?php for($i = 1; $i <= count($xml); $i++){ ?>
                        <li class="nav-item active mr-2">
                            <a class="nav-link" href="page-<?= $i ?>.html"><?= $xml->page[$i - 1]->menu ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        
        <!-- Affichage du contenu de la page XML sélectionné dans la NavBar -->
        <div class="container">
            <!--<div class="backgroundColor container p-3">-->
                <?= $xml->page[$pageID - 1]->content;
                // Affichage des données saisies dans le formulaire
                // à la validation sur le bouton
                if(isset($_POST['send']) && count($formError) == 0){
                    $headers = 'Reply-To: ' . $email;
                    // Fonction permettant d'envoyer un mail contenant
                    // les données saisies dans le formulaire
                    mail('gaetan.jonard@outlook.fr', $subject, $message, $headers);
                    ?>
                    <p>Nom : <?= $name ?></p>
                    <p>Email :<?= $email ?></p>
                    <p>Téléphone : <?= $phoneNumber ?></p>
                    <p>Sujet : <?= $subject ?></p>
                    <p>Ville : <?= $city ?></p>
                    <p>Message : <?= $message ?></p>
                    <?php
                }
                else{
                    foreach($formError as $value){
                        ?>
                        <p class="text-warning font-weight-bold"><?= $value ?></p>
                        <?php
                    }
                }
                ?>              
            <!--</div>--> 
        </div>
        
        <!-- Footer -->
        <footer class="border-top mt-5">
            <!-- Footer Links -->
            <div class="container text-center text-md-left">
                <!-- Grid row -->
                <div class="row">
                    <div class="col-md-3 col-sm-12 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Besoin d'aide</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://nantes-ocordo-travaux.fr/" target="_blank">Contactez-nous</a>
                            </li>
                            <li>
                                <a href="https://nantes-ocordo-travaux.fr/" target="_blank">Questions fréquentes</a>
                            </li>
                            <li>
                                <a href="https://nantes-ocordo-travaux.fr/" target="_blank">Retourner un produit</a>
                            </li>
                            <li>
                                <a href="https://nantes-ocordo-travaux.fr/" target="_blank">Nos conditions de livraison</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 mx-auto">
                        <!-- Links -->
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Informations légales</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://nantes-ocordo-travaux.fr/" target="_blank">Nos Conditions de Vente</a>
                            </li>
                            <li>
                                <a href="https://nantes-ocordo-travaux.fr/" target="_blank">Mentions légales</a>
                            </li>
                            <li>
                                <a href="https://nantes-ocordo-travaux.fr/" target="_blank">Utilisation des Cookies</a>
                            </li>
                            <li>
                                <a href="https://nantes-ocordo-travaux.fr/" target="_blank">Les avis en ligne</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 mx-auto">
                        <!-- Links -->
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">À propos de Ocordo</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://nantes-ocordo-travaux.fr/" target="_blank">Nos engagements</a>
                            </li>
                            <li>
                                <a href="https://nantes-ocordo-travaux.fr/" target="_blank">Nos services</a>
                            </li>
                            <li>
                                <a href="https://nantes-ocordo-travaux.fr/" target="_blank">L'espace fidélité</a>
                            </li>
                            <li>
                                <a href="https://nantes-ocordo-travaux.fr/" target="_blank">Cartes & Coffrets cadeaux</a>
                            </li>
                        </ul>
                    </div> 
                    <!-- Logo Réseaux sociaux -->
                    <div class="col-md-3 col-sm-12 " style="float: right">
                        <label class="social-container center-content">
                            <input type="checkbox">
                            <a class="social-icon facebook" data-description="facebook">
                                <img src="assets/img/facebook.PNG" class="facebook">
                                <i class="fa-facebook-f center-content"></i>
                            </a>
                            <a class="social-icon twitter" data-description="twitter">
                                <img src="assets/img/twitter.PNG" class="twitter">
                                <i class=" fa-twitter center-content"></i>
                            </a>
                            <a class="social-icon reddit" data-description="youtube">
                                <img src="assets/img/youtube.PNG" class="youtube">
                                <i class=" fa-reddit-alien center-content"></i>
                            </a>
                            <a class="social-icon github" data-description="instagram">
                                <img src="assets/img/instagram.PNG" class="instagram">
                                <i class=" fa-github center-content"></i>
                                <div class="description">Follow us on ...</div>
                            </a>
                        </label>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3">Maçonnerie Ocordo 2019 Copyright:
                <a href="https://nantes-ocordo-travaux.fr/" target="_blank"> Ocordo.com</a>
            </div>
        </footer>
    </body>
    
    <!-- Javascript NavBar Menu Burger déroulant -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
