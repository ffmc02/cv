<?php

// Création de la class clients
class clients {

// Liste des attributs
    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $card;
    public $cardNumber;
    public $db;

// Déclaration des méthodes
    public function __construct() {
        // On teste les erreurs avec le try/catch
        // Si tout est bon, on est connecté à la base de données
        try {
         $this->db = new PDO('mysql:host=mysql-cv-gaetan-jonard.alwaysdata.net;dbname=cv-gaetan-jonard_colyseum;charset=utf8', '184487', 'Juju0507');
 
//                $this->db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
        }
        // Sinon on affiche un message d'erreur
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

// Méthode pour afficher la liste des clients (Exercice 1)
    public function listClients() {
        $result = array();
        // On récupère les colonnes dont on a besoin dans la table clients
        // On stocke le résultat de la requête dans $req
        $req = $this->db->query('SELECT '
                . '`id`, `lastName`, `firstName`, '
                . 'DATE_FORMAT(`birthDate`, "%d %b %Y") AS `date` '
                . 'FROM `clients` '
                . 'ORDER BY `lastName` ASC');
         if (is_object($req)) {
        // On exécute la requête $req
        // fetchAll : Va chercher tous les résultats de la requête
        // sous la forme d'un tableau d'objet (FETCH_OBJ)
        $result = $req->fetchAll(PDO::FETCH_OBJ);
        // On retourne ce tableau30/
        return $result;
    }
    }
// Méthode pour afficher la liste des  20 premier clients (Exercice 3)
    public function list20FristClients() {
        $result = array();
        // On récupère les colonnes dont on a besoin dans la table clients
        // On stocke le résultat de la requête dans $req
        $req = $this->db->query('SELECT '
                . '`id`, `lastName`, `firstName`, '
                . 'DATE_FORMAT(`birthDate`, "%d %b %Y") AS `date` '
                . 'FROM `clients` '
                . 'LIMIT 20');
 if (is_object($req)) {

        // fetchAll : Va chercher tous les résultats de la requête
        // sous la forme d'un tableau d'objet (FETCH_OBJ)
        $result = $req->fetchAll(PDO::FETCH_OBJ);
       
            // On retourne ce tableau
            return $result;
        }
    }

// Méthode pour afficher la liste des  clients possédant une carte de fidélité (Exercice 4)
    public function customersWithLoyaltyCard() {
        $result = array();
        // On récupère les colonnes dont on a besoin dans la table clients
        // On stocke le résultat de la requête dans $req
        $req = $this->db->query('SELECT clients.`lastName`, cardtypes.`id` '
                . ' FROM `clients`  '
                . 'INNER JOIN `cards` '
                . 'ON clients.`cardNumber` = cards.`cardNumber`'
                . ' INNER JOIN `cardTypes` '
                . 'ON cards.`cardTypesId` = cardTypes.`id`'
                . '');

if (is_object($req)) {
        // fetchAll : Va chercher tous les résultats de la requête
        // sous la forme d'un tableau d'objet (FETCH_OBJ)
        $result = $req->fetchAll(PDO::FETCH_OBJ);
             
            // On retourne ce tableau
            return $result;
        }
    }


// Méthode pour afficher la liste des clients commencant par la lettre M(Exercice 5)
    public function customerStartingWithTheLetterMList() {
        $result = array();
        // On récupère les colonnes dont on a besoin dans la table clients
        // On stocke le résultat de la requête dans $req
        $req = $this->db->query('SELECT '
                . '`lastName`, `firstName` '
                . 'FROM `clients` '
                . ' WHERE `lastName` like "M%"'
                . ' ORDER BY `lastName` ASC');

if (is_object($req)) {

        // fetchAll : Va chercher tous les résultats de la requête
        // sous la forme d'un tableau d'objet (FETCH_OBJ)
        $result = $req->fetchAll(PDO::FETCH_OBJ);
             
            // On retourne ce tableau
            return $result;
        }
    }


    // Méthode pour afficher la liste les clients avec les cartes et les numéros de carte  (Exercice 7)
    public function clientsFidelityList() {
        $result = array();
        // On récupère les colonnes dont on a besoin dans la table clients
        // On stocke le résultat de la requête dans $req
        $req = $this->db->query
                ('SELECT'
                . '`clients`.`lastName`, '
                . '`clients`.`firstName`, '
                . 'DATE_FORMAT(`clients`.`birthDate`, "%d-%b-%Y") AS `date`, '
                . '`clients`.`card`, '
                . '`clients`.`cardNumber`, '
                . 'CASE '
                . 'WHEN `cardtypes`.`id` = 1 THEN "OUI" ELSE "NON" '
                . 'END AS `carte` '
                . 'FROM '
                . '`clients` '
                . 'LEFT JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber` '
                . 'LEFT JOIN `cardtypes` ON `cards`.`cardTypesId` = `cardtypes`.`id` ');

        // On exécute la requête $req
        // fetchAll : Va chercher tous les résultats de la requête
        // sous la forme d'un tableau d'objet (FETCH_OBJ)
        $result = $req->fetchAll(PDO::FETCH_OBJ);
        if (is_object($req)) {
            // On retourne ce tableau
            return $result;
        }
    }

    public function __destruct() {
        $this->db = NULL;
    }

}
