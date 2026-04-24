<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../public/image/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../public/css/global-styles.css">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/servicios.css">
    <link rel="stylesheet" href="../public/css/carousel.css">
    <link rel="stylesheet" href="../public/css/services.css">
    <link rel="stylesheet" href="../public/css/how-we-work.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <link rel="stylesheet" href="../public/css/whatsapp-modal.css">
    <title>Nuestros Servicios</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <div class="contenedor-linea__imagen">
        <h2>NUESTROS SERVICIOS</h2>
    </div>
    <main class="contenedor-principal">
        <section class="contenedor-servicios">
            <?php require_once '../components/services.php' ?>
            <h2 class="titulo-marcas-seccion">Taller multimarca</h2>
            <?php require_once '../components/carousel.php' ?>
            <?php require_once '../components/how-we-work.php' ?>
        </section>

    </main>

    <?php require_once '../components/footer.php' ?>
    <?php require_once '../components/whatsapp-modal.php' ?>
</body>

<script src="../public/js/sidebar.js"></script>
<script src="../public/js/carousel.js"></script>
<script src="../public/js/cookies.js"></script>

</html>