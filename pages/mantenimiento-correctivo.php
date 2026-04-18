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
    <title>Mantenimiento Correctivo</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <section class="section-info">
            <div class="container-info">
                <div class="container-text">
                    <h2>Mantenimiento Correctivo</h2>
                    <p>El <strong>mantenimiento correctivo</strong> se enfoca en la detección, diagnóstico y reparación de fallas presentes en el vehículo. Este tipo de servicio se realiza cuando un componente ya ha sufrido desgaste o daño y requiere intervención técnica especializada.</p>
                    <p>Dentro de este servicio se incluyen:</p>
                    <ul>
                        <li>Diagnóstico de fallas mecánicas y electrónicas</li>
                        <li>Reparación de motor</li>
                        <li>Revisión y reparación del sistema de transmisión</li>
                        <li>Reparación de suspensión y dirección</li>
                        <li>Mantenimiento y reparación de frenos</li>
                        <li>Solución de fallas en el sistema eléctrico</li>
                        <li>Revisión y reparación del sistema de climatización</li>
                        <li>Mantenimiento del sistema de enfriamiento</li>
                    </ul>
                    <p>En Electroemisiones realizamos este tipo de trabajos con un diagnóstico previo preciso, para darte una solución efectiva y duradera. Nos enfocamos en que tu vehículo recupere su funcionamiento óptimo, brindándote seguridad y confianza al momento de conducir.</p>
                </div>
                <div class="container-img">
                    <img class="img-prevent" src="../public/image/mantenimiento-correctivo-1.webp" alt="">
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