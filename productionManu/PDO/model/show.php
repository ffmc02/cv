<?php



// Création de la class clients
class show {

// Liste des attributs
    public $id;
    public $types;
    public $db;

// Déclaration des méthodes
    public function __construct() {
        // On teste les erreurs avec le try/catch
        // Si tout est bon, on est connecté à la base de données
        try {
//            $this->db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
            //Fonction pour transformer les mois en français
             $this->db = new PDO('mysql:host=mysql-cv-gaetan-jonard.alwaysdata.net;dbname=cv-gaetan-jonard_colyseum;charset=utf8', '184487', 'Juju0507');
 
        }
        // Sinon on affiche un message d'erreur
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

// Méthode pour afficher la liste des clients (Exercice 1)
    public function showList() {
        $this->db->query('SET lc_time_names="fr_FR"');
        // On récupère les colonnes dont on a besoin dans la table clients
        // On stocke le résultat de la requête dans $req
       $req = $this->db->query('SELECT title,performer, DATE_FORMAT(date, "%d %M %Y") AS date, TIME_FORMAT(startTime, "%Hh%i") AS startTime FROM shows ORDER BY title ASC');
        // On exécute la requête $req
     
        // fetchAll : Va chercher tous les résultats de la requête
        // sous la forme d'un tableau d'objet (FETCH_OBJ)
        $result = $req->fetchAll(PDO::FETCH_OBJ);
        // On retourne ce tableau
        return $result;
    }

    public function __destruct() {
        $this->db = NULL;
    }

}