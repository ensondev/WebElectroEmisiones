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
    <title>Electricidad Automotriz</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <section class="section-info">
            <div class="container-info">
                <div class="container-text">
                    <h2>Electricidad Automotriz</h2>
                    <p>La <strong>electricidad automotriz</strong> abarca el diagnóstico y reparación de todos los sistemas eléctricos del vehículo.</p>
                    <p>Dentro de este servicio se incluyen:</p>
                    <ul>
                        <li>Diagnóstico de fallas eléctricas</li>
                        <li>Revisión y mantenimiento de batería</li>
                        <li>Evaluación de alternador y sistema de carga</li>
                        <li>Revisión del motor de arranque</li>
                        <li>Inspección y reparación de cableado</li>
                        <li>Diagnóstico de sensores y módulos electrónicos</li>
                    </ul>
                    <p>Estos trabajos permiten detectar y solucionar problemas eléctricos de forma precisa, evitando fallas mayores y asegurando un funcionamiento confiable del vehículo.</p>
                    <a href="../pages/form-appointment.php"><button class="schedule">Agenda Tu Cita Aquí</button></a>
                </div>
                <div class="container-img">
                    <img class="img-prevent" src="../public/image/Electricidad-Automotriz-2.jpg" alt="">
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