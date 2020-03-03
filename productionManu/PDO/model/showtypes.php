<?php

// Création de la class showtypes
class showtypes {

// Liste des attributs
    public $id;
    public $type;
    public $db;

// Déclaration des méthodes
    public function __construct() {
        // On teste les erreurs avec le try/catch
        // Si tout est bon, on est connecté à la base de données
        try {
           $this->db = new PDO('mysql:host=mysql-cv-gaetan-jonard.alwaysdata.net;dbname=cv-gaetan-jonard_colyseum;charset=utf8', '184487', 'Juju0507');
 
//            $this->db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
        }
        // Sinon on affiche un message d'erreur
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

// Méthode pour afficher la liste des types de spectacle (Exercice 2)
        public function listShowtypes() {
        $result= array(); 
        // On récupère les colonnes dont on a besoin dans la table showtypes
        // On stocke le résultat de la requête dans $req
        $req = $this->db->query('SELECT `type`,`id` FROM `showtypes` ');
        // On exécute la requête $req
        if (is_object($req)) {
            // fetchAll : Va chercher tous les résultats de la requête
            // sous la forme d'un tableau d'objet (FETCH_OBJ)
            $result = $req->fetchAll(PDO::FETCH_OBJ);
        }
        // On retourne ce tableau
        return $result;
    }

    public function __destruct() {
        $this->db = NULL;
    }

}
