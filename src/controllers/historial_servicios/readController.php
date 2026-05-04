<?php

require_once __DIR__ . '/../../services/historyService.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $historyService = new HistoryService();
    $response = $historyService->readHistory();
    http_response_code($response['status']);
    echo json_encode($response);
    exit();
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Metodo no permitido']);
}

?>