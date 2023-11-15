<?php
require_once 'database.php';

class BanqueAgenceDAO {
    private $pdo;

    public function __construct() {
        global $pdo; 
        $this->pdo = $pdo;
    }

    public function getAgences() {
        try {
            $query = "SELECT * FROM BanqueAgence";
            $stmt = $this->pdo->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Une erreur est survenue" . $e->getMessage());
        }
    }

}
?>