<?php
$hostname = 'localhost'; 
$database = 'gestion_banque'; 
$username = 'root'; 
$password = ''; 
try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur connection" . $e->getMessage());
}
?>
