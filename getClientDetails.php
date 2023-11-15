<?php
require_once 'database.php';

if (isset($_GET['clientId'])) {
    $clientId = $_GET['clientId'];

    try {
       
        $query = "SELECT * FROM Clients WHERE IdClient = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$clientId]);
        $client_details = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($client_details) {
            header('Content-Type: application/json');
            echo json_encode($client_details);
        } else {
            echo 'Client inexistant';
        }
    } catch (PDOException $e) {

        echo 'Erreur Survenue : ' . $e->getMessage();
    }
} else {
    echo 'id client non spécifié';
}
?>

