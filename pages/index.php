<?php
    setcookie('data', 'usuario@usuario.net', time() + 84600)
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/global-styles.css">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/carousel.css">
    <link rel="stylesheet" href="../public/css/services.css">
    <link rel="stylesheet" href="../public/css/how-we-work.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <link rel="stylesheet" href="../public/css/whatsapp-modal.css">
    <link rel="stylesheet" href="../public/css/cookies.css">
    <link rel="shortcut icon" href="../public/image/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <!-- <title>ElectroEmisiones</title> -->
    <title>ElectroEmisiones | Taller Automotriz Multimarcas en Guayaquil</title>

    <meta name="description" content="Taller automotriz multimarca en Guayaquil. Especialistas en emisiones, mantenimiento y diagnóstico vehicular. Agenda tu cita en ElectroEmisiones.">
    <meta name="keywords" content="taller automotriz Guayaquil, emisiones vehiculares, mecánica automotriz, revisión técnica, ElectroEmisiones">
    <meta name="author" content="ElectroEmisiones">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://electroemisiones.com">

    <meta name="geo.region" content="EC-G">
    <meta name="geo.placename" content="Guayaquil">
    <meta name="geo.position" content="-2.170998;-79.922359">
    <meta name="ICBM" content="-2.170998, -79.922359">
</head>

<body>
    <?php require_once '../components/navbar.php' ?>

    <main class="principal">
        <h1 class="titulo-electroemisiones">ElectroEmisiones Programación Automotriz - Reparación de vehículo</h1>

        <div class="cabecera-imagen">
            <img src="../public/image/image-head.webp" alt="Taller automotriz ElectroEmisiones" draggable="false" loading="lazy" title="bienvenido a ElectroEmisiones">
        </div>

        <h2 class="titulo-seccion">Taller multimarca</h2>

        <?php require_once '../components/carousel.php' ?>

        <a class="enlace-agenda" href="../pages/form-appointment.php"><button class="boton-agendar"><i class="fa-solid fa-arrow-right"></i> Agenda tu cita aquí <i class="fa-solid fa-arrow-left"></i></button></a>

        <h2 class="titulo-servicios">¿Qué hacemos?</h2>
        <h2 class="subtitulo-servicios">Nuestros servicios</h2>

        <?php require_once '../components/services.php' ?>

    </main>

    <?php require_once '../components/footer.php' ?>
    <?php require_once '../components/whatsapp-modal.php' ?>
    <?php require_once '../components/cookies.php' ?>
</body>

<script src="../public/js/sidebar.js"></script>
<script src="../public/js/carousel.js"></script>
<script src="../public/js/cookies.js"></script>

</html>