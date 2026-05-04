<?php
setcookie('data', 'usuario@usuario.net', time() + 84600)
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Taller automotriz multimarca en Guayaquil. Especialistas en emisiones, mantenimiento y diagnóstico vehicular. Agenda tu cita en ElectroEmisiones.">
    <meta name="keywords" content="taller automotriz Guayaquil, emisiones vehiculares, mecánica automotriz, revisión técnica, ElectroEmisiones, Taller automotriz">
    <meta name="author" content="ElectroEmisiones">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="<?= BASE_URL ?>/public/image/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/global-styles.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/navbar.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/index.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/carousel.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/services.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/how-we-work.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/whatsapp-modal.css">
    <link rel="canonical" href="https://electroemisiones.com">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <title>ElectroEmisiones | Taller Automotriz Multimarcas en Guayaquil</title>
</head>

<body>
    <?php require_once __DIR__ .'/../components/navbar.php' ?>

    <main class="principal">
        <h1 class="titulo-electroemisiones">ElectroEmisiones Programación Automotriz - Reparación de vehículo</h1>
        <div class="cabecera-imagen">
            <img src="<?= BASE_URL ?>/public/image/image-head.webp" alt="Taller automotriz ElectroEmisiones" draggable="false" loading="lazy" title="bienvenido a ElectroEmisiones">
        </div>
        <h2 class="titulo-seccion">Taller multimarca</h2>

        <?php require_once __DIR__ . '/../components/carousel.php' ?>

        <a class="enlace-agenda" href="<?= BASE_URL ?>/contactanos"><button class="boton-agendar"><i class="fa-solid fa-arrow-right"></i> Agenda tu cita aquí <i class="fa-solid fa-arrow-left"></i></button></a>
        <h2 class="titulo-servicios">¿Qué hacemos?</h2>
        <h2 class="subtitulo-servicios">Nuestros servicios</h2>

        <?php require_once __DIR__ . '/../components/services.php' ?>
    </main>

    <?php require_once __DIR__ . '/../components/footer.php' ?>
    <?php require_once __DIR__ . '/../components/whatsapp-modal.php' ?>


    <script src="<?= BASE_URL ?>/public/js/sidebar.js"></script>
    <script src="<?= BASE_URL ?>/public/js/carousel.js"></script>
</body>


</html>