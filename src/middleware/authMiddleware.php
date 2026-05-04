<?php

require_once __DIR__ . '/../helpers/jwt.php';
require_once __DIR__ . '/../config/env.php';

function authMiddleware() {
    $headers = getallheaders();

    if (!isset($headers['Authorization'])) {
        http_response_code(401);
        echo json_encode(['error' => 'Token no enviado']);
        exit();
    }

    $token = str_replace('Bearer ', '', $headers['Authorization']);

    $jwt = new JwtToken($GLOBALS['JWT_SECRET']);

    try {
        $decoded = $jwt->decode($token);

        if (!$decoded) {
            throw new Exception("Token inválido");
        }

        return $decoded; // 🔥 Aquí viene el id_usuario
    } catch (Exception $e) {
        http_response_code(401);
        echo json_encode(['error' => 'Token inválido']);
        exit();
    }
}
