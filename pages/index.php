<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/global-styles.css">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/carousel.css">
    <link rel="stylesheet" href="../public/css/services.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <link rel="shortcut icon" href="../public/image/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <title>ElectroEmisiones</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>

    <main class="main">
        <div class="container_img-head">
            <img src="../public/image/image-head.png" alt="">
        </div>

        <h2 class="sub-title">TALLER MULTIMARCAS</h2>
        <h2 class="sub-title_two">Marcas de autos</h2>

        <?php require_once '../components/carousel.php' ?>

        <a href="../pages/form-appointment.php"><button class="schedule">Agenda Tu Cita Aquí</button></a>

        <section class="services">
            <h2 class="sub-title-service">QUE HACEMOS</h2>
            <h2 class="sub-title-service-two">Nuestros Servicios</h2>

            <div class="container-services service-1">
                <div class="card-service">
                    <img src="../public/image/mantenimiento-preventivo-1.jpg" alt="">
                    <h2>Mantenimiento Preventivo</h2>
                    <a href="../pages/mantenimiento-preventivo.php"><i class="fa-solid fa-angle-down"></i>ver más</a>
                </div>
            </div>

            <div class="container-services service-2">
                <div class="card-service">
                    <img src="../public/image/mantenimiento-correctivo-1.jpg" alt="">
                    <h2>Mantenimiento Correctivo</h2>
                    <a href="../pages/mantenimiento-correctivo.php"><i class="fa-solid fa-angle-down"></i>ver más</a>
                </div>
            </div>

            <div class="container-services service-2">
                <div class="card-service">
                    <img src="../public/image/scanner-automotriz.jpg" alt="">
                    <h2>Scanner Automotriz</h2>
                    <a href="../pages/scanner-automotriz.php"><i class="fa-solid fa-angle-down"></i>ver más</a>
                </div>
            </div>

            <div class="container-services service-2">
                <div class="card-service">
                    <img src="../public/image/sistema-de-inyeccion-1.jpg" alt="">
                    <h2>Sistema de Inyección</h2>
                    <a href="../pages/sistema-inyección.php"><i class="fa-solid fa-angle-down"></i>ver más</a>
                </div>
            </div>

            <div class="container-services service-2">
                <div class="card-service">
                    <img src="../public/image/sistema-aire-condicionado-1.jpg" alt="">
                    <h2>Aire Acondicionado</h2>
                    <a href="../pages/aire-acondicionado.php"><i class="fa-solid fa-angle-down"></i>ver más</a>
                </div>
            </div>

            <div class="container-services service-2">
                <div class="card-service">
                    <img src="../public/image/Electricidad-Automotriz-1.jpg" alt="">
                    <h2>Electricidad Automotriz</h2>
                    <a href="../pages/electricidad-automotriz.php"><i class="fa-solid fa-angle-down"></i>ver más</a>
                </div>
            </div>

            <div class="container-services service-2">
                <div class="card-service">
                    <img src="../public/image/alineacion-balanceo-1.jpg" alt="">
                    <h2>Alineación y Balanceo</h2>
                    <a href="../pages/alineacion-balanceo.php"><i class="fa-solid fa-angle-down"></i>ver más</a>
                </div>
            </div>

            <div class="container-services service-2">
                <div class="card-service">
                    <img src="../public/image/pintura-automotriz-2.jpg" alt="">
                    <h2>Pintura Automotriz</h2>
                    <a href="../pages/pintura-automotriz.php"><i class="fa-solid fa-angle-down"></i>ver más</a>
                </div>
            </div>

            <div class="container-services service-2">
                <div class="card-service">
                    <img src="../public/image/tapiceria-3.jpg" alt="">
                    <h2>Mantenimiento de Tapicería</h2>
                    <a href="../pages/tapicería.php"><i class="fa-solid fa-angle-down"></i>ver más</a>
                </div>
            </div>

            <div class="container-services service-2">
                <div class="card-service">
                    <img src="../public/image/vidrios-automotrices-1.jpg" alt="">
                    <h2>Cambio de Vidrios</h2>
                    <a href="../pages/cambio-de-vidrios.php"><i class="fa-solid fa-angle-down"></i>ver más</a>
                </div>
            </div>

            <div class="container-services service-2">
                <div class="card-service">
                    <img src="../public/image/compra-venta-1.jpg" alt="">
                    <h2>Evaluación de Compra-Venta</h2>
                    <a href="../pages/compra-venta.php"><i class="fa-solid fa-angle-down"></i>ver más</a>
                </div>
            </div>
        </section>
        <?php require_once '../components/map.php' ?>
        <?php require_once '../components/footer.php' ?>
    </main>
</body>

<script src="../public/js/sidebar.js"></script>
<script src="../public/js/carousel.js"></script>

</html>