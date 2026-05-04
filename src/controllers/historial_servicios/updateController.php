<?php

require_once __DIR__ . '/../../services/historyService.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {

    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    if (!$data) {
        http_response_code(400);
        echo json_encode(['error' => 'Datos JSON inválido']);
        exit();
    }

    if (!isset($data['id_historial'])) {
        http_response_code(403);
        echo json_encode(["error" => "ID del historial es necesario"]);
        exit();
    }

    if (!isset($data['marca'])) {
        http_response_code(403);
        echo json_encode(["error" => "Marca del vehículo necesaria"]);
        exit();
    }

    if (!isset($data['modelo'])) {
        http_response_code(403);
        echo json_encode(["error" => "Modelo del vehículo necesario"]);
        exit();
    }

    if (!isset($data['anio'])) {
        http_response_code(403);
        echo json_encode(["error" => "Año del vehículo necesario"]);
        exit();
    }

    if (!isset($data['combustible'])) {
        http_response_code(403);
        echo json_encode(["error" => "Combustible del vehículo necesario"]);
        exit();
    }

    if (!isset($data['descripcion'])) {
        http_response_code(403);
        echo json_encode(["error" => "Descripción es necesaria"]);
        exit();
    }

    if (!isset($data['ruta_imagen'])) {
        http_response_code(403);
        echo json_encode(["error" => "Ruta de la imagen es necesaria"]);
        exit();
    }

    $historyService = new HistoryService();

    $response = $historyService->updateHistory(
        trim($data['id_historial']),
        trim($data['marca']),
        trim($data['modelo']),
        trim($data['anio']),
        trim($data['combustible']),
        trim($data['descripcion']),
        trim($data['ruta_imagen'])
    );

    http_response_code($response['status']);
    echo json_encode($response);
    exit();

} else {
    http_response_code(405);
    echo json_encode(['error' => 'Método no permitido']);
}