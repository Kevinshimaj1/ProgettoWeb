<?php
session_start();
header('Content-Type: application/json; charset=utf-8');

require_once "../../bootstrap.php";

$email = $_GET['email'] ?? null;
if (!$email) {
    echo json_encode(['success' => false, 'message' => 'Email non specificata']);
    exit;
}

$ordini = $dbh->getOrdiniByCliente($email);

if ($ordini === null) {
    echo json_encode(['success' => false, 'message' => 'Errore nel recupero degli ordini']);
    exit;
}

echo json_encode(['success' => true, 'ordini' => $ordini]);
?>
