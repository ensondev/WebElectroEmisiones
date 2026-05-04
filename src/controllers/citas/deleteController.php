<?php

require_once __DIR__ . '/../../services/contactService.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    if (!$data) {
        http_response_code(400);
        echo json_encode(['error' => 'Datos JSON invalido']);
        exit();
    }

    if(!isset($data['id_cita'])){
        http_response_code(403);
        echo json_encode(["error" => "identificador de la cita necesario"]);
        exit();
    }

    $contactService = new ContactService();

    $response = $contactService->hardDeleteContact(
        trim($data['id_cita'])
    );

    http_response_code($response['status']);
    echo json_encode($response);
    exit();
}else{
    http_response_code(405);
    echo json_encode(['error' => 'Metodo no permitido']);
}
