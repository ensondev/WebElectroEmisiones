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
    <title>Mantenimiento Preventivo</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <section class="section-info">

            <div class="container-info">
                <div class="container-text">
                    <h2>Mantenimiento Preventivo</h2>
                    <p>El <strong>mantenimiento preventivo automotriz</strong> consiste en una serie de revisiones periódicas orientadas a garantizar el correcto funcionamiento del vehículo y prevenir fallas mecánicas o electrónicas que puedan generar reparaciones costosas.</p>
                    <p>Dentro de este servicio se incluyen:</p>
                    <ul>
                        <li>Cambio de aceite y filtros</li>
                        <li>Revisión del sistema de frenos</li>
                        <li>Inspección de suspensión y dirección</li>
                        <li>Chequeo del estado de la batería</li>
                        <li>Verificación de niveles y condiciones de los fluidos</li>
                        <li>Revisión general de luces y componentes eléctricos</li>
                        <li>Alineación y balanceo</li>
                        <li>Reemplazo de piezas según el kilometraje recomendado</li>
                    </ul>
                    <p>En <strong>Electroemisiones</strong> realizamos este servicio de forma completa y responsable, revisando cada detalle para que tu vehículo funcione correctamente y con seguridad. Nos adaptamos a lo que necesita tu auto y te orientamos para darle el mantenimiento adecuado en el momento indicado.</p>
                </div>
                <div class="container-img">
                    <img class="img-prevent" src="../public/image/mantenimiento-preventivo-2.jpg" alt="">
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