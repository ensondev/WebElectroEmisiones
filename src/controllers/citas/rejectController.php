<?php

require_once __DIR__ . '/../../services/contactService.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {

    $data = json_decode(file_get_contents("php://input"), true);

    $contactService = new ContactService();

    $response = $contactService->rejectContact($data['id_cita']);

    http_response_code($response['status']);
    echo json_encode($response);
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Metodo no permitido']);
}
