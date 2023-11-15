<?php
require_once 'database.php';
class CompteBancaireDAO {
    private $pdo;
    public function __construct() {
        global $pdo; 
        $this->pdo = $pdo;
    }
    public function obtenirTousLesComptes() {
        try {
            $query = "SELECT * FROM CompteBancaires";
            $stmt = $this->pdo->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Une erreur est survenue " . $e->getMessage());
        }
    }
}
