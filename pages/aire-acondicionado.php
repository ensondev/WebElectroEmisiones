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
    <title>Aire Acondicionado</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <section class="section-info">

            <div class="container-info">
                <div class="container-text">
                    <h2>Sistema de Aire Acondicionado</h2>
                    <p>El <strong>sistema de aire acondicionado</strong> requiere mantenimiento periódico para garantizar un funcionamiento eficiente.</p>
                    <p>Dentro de este servicio se incluyen:</p>
                    <ul>
                        <li>Inspección general del sistema de aire acondicionado</li>
                        <li>Recarga de refrigerante</li>
                        <li>Detección y reparación de fugas</li>
                        <li>Pruebas de presión del sistema</li>
                        <li>Limpieza de componentes</li>
                        <li>Revisión del compresor y demás elementos principales</li>
                    </ul>
                    <p>En Electroemisiones realizamos el mantenimiento del aire acondicionado con equipos adecuados, asegurando un funcionamiento eficiente para que disfrutes de un ambiente cómodo al conducir.</p>
                </div>
                <div class="container-img">
                    <img class="img-prevent" src="../public/image/sistema-aire-condicionado-1.jpg" alt="">
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