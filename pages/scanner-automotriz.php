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
    <title>Scanner Automotriz</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <section class="section-info">
            <h2>Scanner Automotriz</h2>
            <p>El <strong>diagnóstico electrónico</strong> permite identificar fallas mediante equipos especializados que se conectan a la computadora del vehículo, analizando códigos de error y parámetros en tiempo real.</p>
            <p>Este procedimiento permite identificar con exactitud fallas en los sistemas electrónicos, sensores y módulos de control, optimizando el proceso de reparación. Gracias a esta tecnología, se minimizan los tiempos de intervención, se evitan reemplazos innecesarios y se garantiza una solución más eficiente y confiable.</p>
            <button class="schedule">Agenda Tu Cita Aquí</button>
            <img class="img-prevent" src="../public/image/scanner-automotriz-2.jpg" alt="">

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