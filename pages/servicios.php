<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="<?= BASE_URL ?>/public/image/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/global-styles.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/navbar.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/servicios.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/carousel.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/services.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/how-we-work.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/whatsapp-modal.css">
    <title>Nuestros Servicios</title>
</head>

<body>
    <?php require_once __DIR__ . '/../components/navbar.php' ?>
    <div class="contenedor-linea__imagen">
        <h2>NUESTROS SERVICIOS</h2>
    </div>
    <main class="contenedor-principal">
        <section class="contenedor-servicios">
            <?php require_once __DIR__ . '/../components/services.php' ?>
            <h2 class="titulo-marcas-seccion">Taller multimarca</h2>
            <?php require_once __DIR__ . '/../components/carousel.php' ?>
            <?php require_once __DIR__ . '/../components/how-we-work.php' ?>
        </section>

    </main>

    <?php require_once __DIR__ . '/../components/footer.php' ?>
    <?php require_once __DIR__ . '/../components/whatsapp-modal.php' ?>
</body>

<script src="<?= BASE_URL ?>/public/js/sidebar.js"></script>
<script src="<?= BASE_URL ?>/public/js/carousel.js"></script>
<script src="<?= BASE_URL ?>/public/js/cookies.js"></script>

</html>