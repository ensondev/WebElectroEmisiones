<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/global-styles.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/navbar.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/historial.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/carousel.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/how-we-work.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/whatsapp-modal.css">
    <title>Historial</title>
</head>

<body>
    <?php require_once __DIR__ . '/../components/navbar.php' ?>
    <div class="container-img_contact">
        <h2>Historial de Servicios</h2>
    </div>
    <main class="contenedor-principal">
        <p id="message"></p>
        <div class="historial-container" id="historial-container">
            <p>Cargando...</p>
        </div>

        <h2 class="titulo-marcas-seccion">Taller multimarca</h2>
        <?php require_once __DIR__ . '/../components/carousel.php' ?>
        <?php require_once __DIR__ . '/../components/how-we-work.php' ?>
    </main>

    <?php require_once __DIR__ . '/../components/footer.php' ?>
    <?php require_once __DIR__ . '/../components/whatsapp-modal.php' ?>

    <script src="<?= BASE_URL ?>/public/js/form-servicios.js"></script>
    <script src="<?= BASE_URL ?>/public/js/sidebar.js"></script>
    <script src="<?= BASE_URL ?>/public/js/carousel.js"></script>
</body>

</html>