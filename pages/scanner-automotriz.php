<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/global-styles.css">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/maintenances.css">
    <link rel="stylesheet" href="../public/css/carousel.css">
    <link rel="stylesheet" href="../public/css/how-we-work.css">
    <link rel="stylesheet" href="../public/css/map.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <link rel="shortcut icon" href="../public/image/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <title>Scanner Automotriz</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <section class="section-info">
            <div class="container-info">
                <div class="container-text">
                    <h2>Scanner Automotriz</h2>
                    <p>El <strong>diagnóstico electrónico</strong> permite identificar fallas mediante equipos especializados que se conectan a la computadora del vehículo, analizando códigos de error y parámetros en tiempo real.</p>
                    <p>Dentro de este servicio se incluyen:</p>
                    <ul>
                        <li>Lectura y borrado de códigos de error</li>
                        <li>Diagnóstico de sistemas electrónicos del vehículo</li>
                        <li>Revisión de sensores y actuadores</li>
                        <li>Análisis de parámetros en tiempo real</li>
                        <li>Detección de fallas en módulos de control</li>
                        <li>Evaluación del rendimiento del motor y otros sistemas</li>
                    </ul>
                    <p>Este procedimiento permite detectar problemas con mayor precisión, optimizando el proceso de reparación y evitando cambios innecesarios de piezas.</p>
                    <p>En Electroemisiones realizamos diagnósticos con equipos actualizados, brindándote información clara y soluciones efectivas para que tu vehículo funcione de manera eficiente y confiable.</p>
                    <a href="../pages/form-appointment.php"><button class="schedule">Agenda Tu Cita Aquí</button></a>
                </div>
                <div class="container-img">
                    <img class="img-prevent" src="../public/image/scanner-automotriz-2.webp" alt="">
                </div>
            </div>

            <h2 class="sub-title">Marcas de autos</h2>
            <?php require_once '../components/carousel.php' ?>
            <?php require_once '../components/how-we-work.php' ?>
        </section>

    </main>
    <?php require_once '../components/footer.php' ?>
</body>
<script src="../public/js/sidebar.js"></script>
<script src="../public/js/carousel.js"></script>

</html>