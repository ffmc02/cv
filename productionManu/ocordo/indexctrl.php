<?php
$file = 'source.xml';
    // Chargement de la page XML dans une variable
    $xml = simplexml_load_file($file);
 
  //  var_dump($xml);
    
    // Déclaration d'un tableau
    // qui contiendra les erreurs du formulaire
    $formError = array();
    
    // Regex du formulaire
    $regexName = '/^[a-zA-ZÀ-ÖØ-öø-ÿ \-\']+$/';
    $regexEmail = '/^([\w]+\.)?[\w]+\@[\w]+\.(fr|com)$/';
    $regexPhoneNumber = '/^[0][1-79]([0-9]){8}$/';
    $regexCity = '/^[a-zA-ZÀ-ÖØ-öø-ÿ \-\'\/]+$/';

    // Récupération du paramètre d'URL correspondant à l'ID de la page
    if(isset($_GET['id'])){
        $pageID = $_GET['id'];
    }
    else{
        $pageID = 1;
    }
    
    // Stockage des données du formulaire
    // dans des variables
    if(isset($_POST['send'])){
        // Test présence et Regex Nom
        if(!empty($_POST['your-name'])){
            $name = htmlspecialchars($_POST['your-name']);
            if(!preg_match($regexName, $name)){
                $formError['your-name'] = 'Erreur dans la saisie du Nom';
            }
        }
        else{
            $formError['your-name'] = 'Veuillez saisir un Nom';
        }
        // Test présence et Regex Email
        if(!empty($_POST['your-email'])){
            $email = htmlspecialchars($_POST['your-email']);
            if(!preg_match($regexEmail, $email)){
                $formError['your-email'] = 'Erreur dans la saisie de l\'Email';
            }
        }
        else{
            $formError['your-email'] = 'Veuillez saisir un Email';
        }
        // Test présence et Regex Téléphone
        if(!empty($_POST['your-tel-615'])){
            $phoneNumber = htmlspecialchars($_POST['your-tel-615']);
            if(!preg_match($regexPhoneNumber, $phoneNumber)){
                $formError['your-tel-615'] = 'Erreur dans la saisie du Numéro de téléphone';
            }
        }
        else{
            $formError['your-tel-615'] = 'Veuillez saisir un Numéro de téléphone';
        }
        // Test présence et Regex Sujet
        if(!empty($_POST['your-subject'])){
            $subject = htmlspecialchars($_POST['your-subject']);
        }
        else{
            $formError['your-subject'] = 'Veuillez saisir un Sujet';
        }
        // Test présence et Regex Ville
        if(!empty($_POST['your-ville'])){
            $city = htmlspecialchars($_POST['your-ville']);
            if(!preg_match($regexCity, $city)){
                $formError['your-ville'] = 'Erreur dans la saisie de la Ville';
            }
        }
        else{
            $formError['your-ville'] = 'Veuillez saisir une Ville';
        }
        // Test présence et Regex Message
        if(!empty($_POST['your-message'])){
            $message = htmlspecialchars($_POST['your-message']);
        }
        else{
            $formError['your-message'] = 'Veuillez saisir un Message';
        }
    }
?>
