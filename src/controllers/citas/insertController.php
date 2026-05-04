<?php

require_once __DIR__ . '/../../services/contactService.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    if (!$data) {
        http_response_code(400);
        echo json_encode(['error' => 'Datos JSON invalido']);
        exit();
    }

    if(!isset($data['nombre_cliente'])){
        http_response_code(403);
        echo json_encode(["error" => "Nombres necesario"]);
        exit();
    }

    if(!isset($data['telefono'])){
        http_response_code(403);
        echo json_encode(["error" => "Telefono necesario"]);
        exit();
    }

    if(!isset($data['correo'])){
        http_response_code(403);
        echo json_encode(["error" => "Correo necesario"]);
        exit();
    }

    if(!isset($data['marca'])){
        http_response_code(403);
        echo json_encode(["error" => "Marca del vehiculo necesario"]);
        exit();
    }

    if(!isset($data['modelo'])){
        http_response_code(403);
        echo json_encode(["error" => "Modelo del vehiculo necesario"]);
        exit();
    }

    if(!isset($data['anio'])){
        http_response_code(403);
        echo json_encode(["error" => "Anio del vehiculo necesario"]);
        exit();
    }

    if(!isset($data['placa'])){
        http_response_code(403);
        echo json_encode(["error" => "Placa del vehiculo necesario"]);
        exit();
    }

    if(!isset($data['kilometraje'])){
        http_response_code(403);
        echo json_encode(["error" => "Kilometraje del vehiculo necesario"]);
        exit();
    }

    if(!isset($data['combustible'])){
        http_response_code(403);
        echo json_encode(["error" => "Tipo combustible del vehiculo necesario"]);
        exit();
    }

    if(!isset($data['servicio'])){
        http_response_code(403);
        echo json_encode(["error" => "Servicio necesario"]);
        exit();
    }

    if(!isset($data['mensaje'])){
        http_response_code(403);
        echo json_encode(["error" => "Mensaje necesario"]);
        exit();
    }

    $contactService = new ContactService();

    $response = $contactService->insertContact(
        trim($data['nombre_cliente']),
        trim($data['telefono']),
        trim($data['correo']),
        trim($data['marca']),
        trim($data['modelo']),
        trim($data['anio']),
        trim($data['placa']),
        trim($data['kilometraje']),
        trim($data['combustible']),
        trim($data['servicio']),
        trim($data['mensaje'])
    );

    http_response_code($response['status']);
    echo json_encode($response);
    exit();
}else{
    http_response_code(405);
    echo json_encode(['error' => 'Metodo no permitido']);
}
