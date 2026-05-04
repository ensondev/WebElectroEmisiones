<?php

require_once __DIR__ . '/../../services/contactService.php';
require_once __DIR__ . '/../../middleware/authMiddleware.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    authMiddleware();

    $contactService = new ContactService();

    $response = $contactService->readContact();
    
    http_response_code($response['status']);
    echo json_encode($response);
    exit();
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Metodo no permitido']);
}

?>