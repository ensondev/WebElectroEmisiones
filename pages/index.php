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
    <link rel="stylesheet" href="../public/css/map.css">
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

        <div class="container-carosel">
            <?php require_once '../components/carousel.php' ?>
        </div>


        <a href="../pages/form-appointment.php"><button class="schedule">Agenda Tu Cita Aquí</button></a>

        <h2 class="sub-title-service">QUE HACEMOS</h2>
        <h2 class="sub-title-service-two">Nuestros Servicios</h2>

        <?php require_once '../components/services.php' ?>

        <?php require_once '../components/map.php' ?>
    </main>
    <?php require_once '../components/footer.php' ?>
</body>

<script src="../public/js/sidebar.js"></script>
<script src="../public/js/carousel.js"></script>

</html>