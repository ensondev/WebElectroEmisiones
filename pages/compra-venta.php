<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/global-styles.css">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/mantenimiento-preventivo.css">
    <link rel="stylesheet" href="../public/css/carousel.css">
    <link rel="stylesheet" href="../public/css/how-we-work.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <link rel="shortcut icon" href="../public/image/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <title>Compra y Ventas</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <section class="section-info">
            <h2>Evaluación para Compra y Venta</h2>
            <p>Este servicio permite conocer el estado real de un vehículo antes de comprar o vender.</p>
            <p>Se realiza una inspección integral de los sistemas mecánico, eléctrico y estructural, identificando posibles fallas, desgastes o reparaciones necesarias. Cada informe proporciona un análisis detallado que permite conocer el valor real del vehículo y garantiza transparencia y seguridad en la transacción.</p>
            <button class="schedule">Agenda Tu Cita Aquí</button>
            <img class="img-prevent" src="../public/image/compra-venta-1.jpg" alt="">

            <h2 class="sub-title">Marcas de autos</h2>
            <?php require_once '../components/carousel.php' ?>
            <?php require_once '../components/how-we-work.php' ?>
        </section>
        <section class="section-map">
            <h2>TALLER ELECTRO EMISIONES</h2>
            <?php require_once '../components/map.php' ?>
        </section>
    </main>
    <?php require_once '../components/footer.php' ?>
</body>
<script src="../public/js/sidebar.js"></script>
<script src="../public/js/carousel.js"></script>

</html>