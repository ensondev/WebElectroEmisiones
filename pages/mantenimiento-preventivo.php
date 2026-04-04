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
    <title>Mantenimiento Preventivo</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <section class="section-info">
            <h2>Mantenimiento Preventivo</h2>
            <p>El <strong>mantenimiento preventivo automotriz</strong> consiste en una serie de revisiones periódicas orientadas a garantizar el correcto funcionamiento del vehículo y prevenir fallas mecánicas o electrónicas que puedan generar reparaciones costosas.</p>
            <p>
                Este proceso incluye tareas como el cambio oportuno de aceite y filtros, la revisión de los sistemas de frenos, suspensión y dirección, el control del estado de la batería, la verificación de niveles y condiciones de los fluidos, así como la inspección general de luces y componentes esenciales. Asimismo, contempla ajustes técnicos como alineación y balanceo, junto con el reemplazo de piezas clave según el kilometraje recomendado.
            </p>
            <p><strong>Nota:</strong> Es importante considerar que cada vehículo puede requerir un plan específico de mantenimiento, por lo que se aconseja seguir las indicaciones del fabricante o del técnico especializado.</p>
            <button class="schedule">Agenda Tu Cita Aquí</button>
            <img class="img-prevent" src="../public/image/mantenimiento-preventivo-2.jpg" alt="">

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