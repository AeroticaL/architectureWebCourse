<?php
require_once 'database.php';
class LigneCompteDAO {
    private $pdo;
    public function __construct() {
        global $pdo; 
        $this->pdo = $pdo;
    }
    public function getAllLignesCompte() {
        try {
            $query = "SELECT * FROM LignesComptes";
            $stmt = $this->pdo->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erreur est survenue" . $e->getMessage());
        }
    }
}
?>