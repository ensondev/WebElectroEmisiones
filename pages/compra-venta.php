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
    <title>Compra y Ventas</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <section class="section-info">

            <div class="container-info">
                <div class="container-text">
                    <h2>Evaluación para Compra y Venta</h2>
                    <p>Este servicio permite conocer el estado real de un vehículo antes de comprar o vender.</p>
                    <p>Dentro de este servicio se incluyen:</p>
                    <ul>
                        <li>Inspección general del estado mecánico del vehículo</li>
                        <li>Revisión del sistema eléctrico y electrónico</li>
                        <li>Evaluación de la estructura y carrocería</li>
                        <li>Detección de fallas, desgastes o reparaciones necesarias</li>
                        <li>Verificación de componentes clave del motor y sistemas principales</li>
                        <li>Elaboración de un informe técnico del estado del vehículo</li>
                    </ul>
                    <p>Este análisis permite tener una visión clara del estado real del vehículo, ayudando a determinar su valor y evitando decisiones basadas en información incompleta.</p>
                    <p>En Electroemisiones realizamos evaluaciones detalladas y objetivas, proporcionando información confiable para que cada compra o venta se realice con total transparencia y seguridad.</p>
                    <a href="../pages/form-appointment.php"><button class="schedule">Agenda Tu Cita Aquí</button></a>
                </div>
                <div class="container-img">
                    <img class="img-prevent" src="../public/image/compra-venta-1.jpg" alt="">
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