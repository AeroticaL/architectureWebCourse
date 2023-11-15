<?php
require_once 'database.php';

class ConseillerDAO {
    private $pdo;

    public function __construct() {
        global $pdo; 
        $this->pdo = $pdo;
    }

    public function getConseillers() {
        try {
            $query = "SELECT * FROM Conseillers";
            $stmt = $this->pdo->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erreur  est survenue " . $e->getMessage());
        }
    }
}
?>