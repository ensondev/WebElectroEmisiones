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
    <title>Cambio de Vidrios</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <section class="section-info">

            <div class="container-info">
                <div class="container-text">
                    <h2>Cambio de Vidrios</h2>
                    <p>Se realizan trabajos de reparación y sustitución de parabrisas y cristales laterales, atendiendo daños como fisuras, impactos o desprendimientos. Cada intervención se ejecuta con materiales y técnicas especializadas, asegurando un ajuste preciso, resistencia adecuada y un acabado confiable acorde a los estándares de seguridad.</p>
                    <p>Dentro de este servicio se incluyen:</p>
                    <ul>
                        <li>Reparación de pequeñas fisuras y golpes en el vidrio</li>
                        <li>Sustitución de parabrisas delantero y trasero</li>
                        <li>Cambio de vidrios laterales</li>
                        <li>Sellado y ajuste para evitar filtraciones</li>
                        <li>Revisión del correcto asentamiento del cristal</li>
                        <li>Limpieza y acabado final de instalación</li>
                    </ul>
                    <p>Este trabajo se realiza asegurando un ajuste preciso y una correcta fijación, lo que garantiza visibilidad, resistencia y seguridad durante la conducción.</p>
                    <a href="../pages/form-appointment.php"><button class="schedule">Agenda Tu Cita Aquí</button></a>
                </div>
                <div class="container-img">
                    <img class="img-prevent" src="../public/image/vidrios-automotrices-1.jpg" alt="">
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