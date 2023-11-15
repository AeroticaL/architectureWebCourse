<?php
require_once 'database.php';
require_once 'clientDTO.php';

class ClientDAO {
    private $pdo;
    public function __construct() {
        global $pdo; 
        $this->pdo = $pdo;
    }

    public function getClients() {
        try {
            $query = "SELECT * FROM Clients";
            $stmt = $this->pdo->query($query);
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'ClientDTO');
        } catch (PDOException $e) {
            die("Erreur est survenue" . $e->getMessage());
        }
    }

    public function obtenirDetailsClient($clientId) {
        try {
            $query = "SELECT * FROM Clients WHERE IdClient = ?";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([$clientId]);
            return $stmt->fetchObject('ClientDTO');
        } catch (PDOException $e) {
            die("Erreur est survenue" . $e->getMessage());
        }
    }
}
?>
