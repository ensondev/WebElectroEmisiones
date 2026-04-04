<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/global-styles.css">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/mantenimiento-preventivo.css">
    <link rel="stylesheet" href="../public/css/carousel.css">
    <link rel="stylesheet" href="../public/css/how-we-work.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <link rel="shortcut icon" href="../public/image/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <title>Mantenimiento Correctivo</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <section class="section-info">
            <h2>Mantenimiento Correctivo</h2>
            <p>El <strong>mantenimiento correctivo</strong> se enfoca en la detección, diagnóstico y reparación de fallas presentes en el vehículo. Este tipo de servicio se realiza cuando un componente ya ha sufrido desgaste o daño y requiere intervención técnica especializada.</p>
            <p>Incluye trabajos especializados en el motor, sistema de transmisión, suspensión, dirección, frenos, sistema eléctrico, climatización y sistema de enfriamiento. Cada servicio se ejecuta a partir de un diagnóstico preciso, con el fin de aplicar reparaciones eficaces que garanticen la seguridad, confiabilidad y óptimo funcionamiento del vehículo a largo plazo.</p>
            <button class="schedule">Agenda Tu Cita Aquí</button>
            <img class="img-prevent" src="../public/image/mantenimiento-correctivo-1.jpg" alt="">

            <h2 class="sub-title">Marcas de autos</h2>
            <?php require_once '../components/carousel.php' ?>
            <?php require_once '../components/how-we-work.php' ?>
        </section>
        <section class="section-map">
            <h2>TALLER ELECTRO EMISIONES</h2>
            <?php require_once '../components/map.php' ?>
        </section>
    </main>
    <?php require_once '../components/footer.php' ?>
</body>
<script src="../public/js/sidebar.js"></script>
<script src="../public/js/carousel.js"></script>

</html>