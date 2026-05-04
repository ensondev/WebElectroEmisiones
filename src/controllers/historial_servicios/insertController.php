<?php

require_once __DIR__ . '/../../services/historyService.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 🔥 VALIDAR CAMPOS (POST)
    if (
        empty($_POST['marca']) ||
        empty($_POST['modelo']) ||
        empty($_POST['anio']) ||
        empty($_POST['combustible']) ||
        empty($_POST['descripcion'])
    ) {
        http_response_code(400);
        echo json_encode(["error" => "Todos los campos son obligatorios"]);
        exit();
    }

    // 🔥 VALIDAR IMAGEN
    if (!isset($_FILES['ruta_imagen']) || $_FILES['ruta_imagen']['error'] !== 0) {
        http_response_code(400);
        echo json_encode(["error" => "La imagen es obligatoria"]);
        exit();
    }

    $imagen = $_FILES['ruta_imagen'];

    // 🔥 VALIDAR TIPO (opcional pero recomendado)
    if (!str_starts_with($imagen['type'], 'image/')) {
        http_response_code(400);
        echo json_encode(["error" => "El archivo debe ser una imagen"]);
        exit();
    }

    // 📁 RUTA DONDE SE GUARDARÁ
    $directorio = __DIR__ . '/../../../public/image/servicios/';

    // Crear carpeta si no existe
    if (!file_exists($directorio)) {
        mkdir($directorio, 0777, true);
    }

    // 🧠 GENERAR NOMBRE ÚNICO
    $nombreImagen = uniqid() . "_" . basename($imagen['name']);
    $rutaFinal = $directorio . $nombreImagen;

    // 🚀 MOVER IMAGEN
    if (!move_uploaded_file($imagen['tmp_name'], $rutaFinal)) {
        http_response_code(500);
        echo json_encode(["error" => "Error al guardar la imagen"]);
        exit();
    }

    // 💾 GUARDAR EN BD
    $historyService = new HistoryService();

    $response = $historyService->insertHistory(
        trim($_POST['marca']),
        trim($_POST['modelo']),
        trim($_POST['anio']),
        trim($_POST['combustible']),
        trim($_POST['descripcion']),
        $nombreImagen // 🔥 SOLO el nombre
    );

    http_response_code($response['status']);
    echo json_encode($response);
    exit();

} else {
    http_response_code(405);
    echo json_encode(['error' => 'Metodo no permitido']);
}