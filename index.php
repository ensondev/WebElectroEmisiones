<?php

require_once __DIR__ . '/vendor/autoload.php';

/* <?= BASE_URL ?> */
define('BASE_PATH', __DIR__);
define('BASE_URL', '/webelectroemisiones');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$base = '/webelectroemisiones';
$route = str_replace($base, '', $uri);

// Normalizar (evita rutas con / al final)
$route = rtrim($route, '/') ?: '/';

$routes = [
    '/' => '/pages/index.php',
    '/conocenos' => '/pages/conocenos.php',
    '/servicios' => '/pages/servicios.php',
    '/contactanos' => '/pages/form-appointment.php',

    '/preventivo' => '/pages/mantenimiento-preventivo.php',
    '/correctivo' => '/pages/mantenimiento-correctivo.php',
    '/scanner' => '/pages/scanner-automotriz.php',
    '/sistema-inyeccion' => '/pages/sistema-inyeccion.php',
    '/aire-acondicionado' => '/pages/aire-acondicionado.php',
    '/electricidad' => '/pages/electricidad-automotriz.php',
    '/alineacion-balanceo' => '/pages/alineacion-balanceo.php',
    '/pintura' => '/pages/pintura-automotriz.php',
    '/tapiceria' => '/pages/tapiceria.php',
    '/parabrisas' => '/pages/cambio-de-vidrios.php',
    '/compra-venta' => '/pages/compra-venta.php',
    '/historial' => '/pages/historial.php',

    '/login' => '/pages/login.php',
    '/register' => '/pages/register.php',
    '/dashboard' => '/pages/dashboard.php'
];

// header('Content-Type: application/json');

/* 4. EJECUCIÓN DEL ROUTER */
if (isset($routes[$route])) {

    $controllerPath = __DIR__ . $routes[$route];

    if (file_exists($controllerPath)) {
        require_once $controllerPath;
    } else {
        http_response_code(500);
        echo "Error: Página no encontrada";
    }
} else {
    http_response_code(404);
    echo "404 - Ruta no encontrada";
}
