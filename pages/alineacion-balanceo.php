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
    <title>Alineación y Balanceo</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <section class="section-info">
            <div class="container-info">
                <div class="container-text">
                    <h2>Alineación y Balanceo</h2>
                    <p>La <strong>alineación y el balanceo</strong> son esenciales para garantizar la estabilidad, seguridad y desgaste uniforme de los neumáticos.</p>
                    <p>Dentro de este servicio se incluyen:</p>
                    <ul>
                        <li>Ajuste de ángulos de alineación de las ruedas</li>
                        <li>Corrección del paralelismo y caída según especificaciones del fabricante</li>
                        <li>Balanceo de llantas y neumáticos</li>
                        <li>Detección de vibraciones en el tren de rodaje</li>
                        <li>Revisión del estado general de los neumáticos</li>
                    </ul>
                    <p>Este trabajo permite mejorar la maniobrabilidad del vehículo, reducir vibraciones al conducir y evitar el desgaste irregular de las llantas, lo que se traduce en una conducción más suave y segura.</p>
                </div>
                <div class="container-img">
                    <img class="img-prevent" src="../public/image/alineacion-balanceo-1.jpg" alt="">
                    <a href="../pages/form-appointment.php"><button class="schedule">Agenda Tu Cita Aquí</button></a>
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