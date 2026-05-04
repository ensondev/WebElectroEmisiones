<?php

require_once __DIR__ . '/../../services/userService.php';
require_once __DIR__ . '/../../middleware/authMiddleware.php';

/* error_reporting(~E_ALL & ~E_WARNING & ~E_NOTICE); */
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] === 'GET'){

    $decode = authMiddleware();

    $id_usuario = $decode['id_usuario'];

    $userService = new UserService();

    $response = $userService->getUsers($id_usuario);

    http_response_code($response['status']);
    echo json_encode($response);
    exit();
}else{
    http_response_code(405);
    echo json_encode(['error' => 'Metodo no permitido']);
}

?>