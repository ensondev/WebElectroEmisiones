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
    <title>Mantenimiento de Tapicería</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <section class="section-info">
            <div class="container-info">
                <div class="container-text">
                    <h2>Mantenimiento de Tapicería</h2>
                    <p>El servicio de <strong>tapicería automotriz</strong> está enfocado en la renovación y conservación del interior del vehículo, mejorando tanto su apariencia como su confort.</p>
                    <p>Dentro de este servicio se incluyen:</p>
                    <ul>
                        <li>Limpieza profunda de asientos y superficies interiores</li>
                        <li>Reparación de desgastes, roturas y costuras</li>
                        <li>Retapizado de asientos y paneles</li>
                        <li>Mantenimiento de techos interiores</li>
                        <li>Limpieza y acondicionamiento de alfombras y pisos</li>
                        <li>Restauración de detalles interiores</li>
                    </ul>
                    <p>Este trabajo permite recuperar la estética del interior del vehículo y mejorar la experiencia de conducción, manteniendo los materiales en buen estado por más tiempo.</p>
                    <a href="../pages/form-appointment.php"><button class="schedule">Agenda Tu Cita Aquí</button></a>
                </div>
                <div class="container-img">
                    <img class="img-prevent" src="../public/image/tapiceria-1.jpg" alt="">
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