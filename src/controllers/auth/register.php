<?php

require_once __DIR__ . '/../../services/authService.php';

/* error_reporting(~E_ALL & ~E_NOTICE & ~E_WARNING); */
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    if(!$data){
        http_response_code(400);
        echo json_encode(['error' => 'Datos JSON invalido']);
        exit();
    }

    if (isEmpty($data['nombres'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Los nombres son obligatorios']);
        exit();
    }

    if (isEmpty($data['apellidos'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Los apellidos son obligatorios']);
        exit();
    }

    if (isEmpty($data['usuario'])) {
        http_response_code(400);
        echo json_encode(['error' => 'El usuario es obligatorio']);
        exit();
    }

    if (isEmpty($data['password'])) {
        http_response_code(400);
        echo json_encode(['error' => 'El password es obligatorio']);
        exit();
    }

    $authService = new AuthService();

    $response = $authService->register(
        trim($data['nombres']),
        trim($data['apellidos']),
        trim($data['usuario']),
        trim($data['password'])
    );

    http_response_code($response['status']);
    echo json_encode($response);
    exit();

}else{
    http_response_code(405);
    echo json_encode(['error' => 'Metido no permitido']);
}

function isEmpty($value) {
    return !isset($value) || trim($value) === '';
}


?>