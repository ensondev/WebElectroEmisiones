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

    if (isEmpty($data['usuario']) || isEmpty($data['password'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Faltan campos: usuario o password']);
        exit();
    }
    
    $authService = new AuthService();

    $response = $authService->login(
        trim($data['usuario']),
        trim($data['password'])
    );

    http_response_code($response['status']);
    echo json_encode($response);
    exit();
}else{
    http_response_code(405);
    echo json_encode(['error' => 'Metodo no permitido']);
    exit;
}

function isEmpty($value) {
    return !isset($value) || trim($value) === '';
}

?>