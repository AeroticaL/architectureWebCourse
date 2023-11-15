<?php
require_once 'clientDO.php';

$clientDO = new ClientDO();
$clients = $clientDO->getClients();

header('Content-Type: application/json');
echo json_encode($clients);
?>
