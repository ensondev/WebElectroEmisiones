<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/global-styles.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/navbar.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/maintenances.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/carousel.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/how-we-work.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/map.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/whatsapp-modal.css">
    <link rel="shortcut icon" href="../public/image/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <title>Alineación y Balanceo</title>
</head>

<body>
    <?php require_once __DIR__ . '/../components/navbar.php' ?>
    <main class="contenedor-principal">
        <section class="mantenimiento mantenimiento-alineacion-balanceo">
            <div class="mantenimiento__contenedor mantenimiento-alineacion-balanceo__contenedor">
                <div class="mantenimiento__texto mantenimiento-alineacion-balanceo__texto">
                    <h1 class="mantenimiento__titulo mantenimiento-alineacion-balanceo__titulo">Alineación y Balanceo</h1>
                    <p class="mantenimiento__descripcion mantenimiento-alineacion-balanceo__descripcion">La <strong>alineación y el balanceo</strong> son esenciales para garantizar la estabilidad, seguridad y desgaste uniforme de los neumáticos.</p>
                    <p class="mantenimiento__descripcion mantenimiento-alineacion-balanceo__descripcion">Dentro de este servicio se incluyen:</p>
                    <ul class="mantenimiento__lista mantenimiento-alineacion-balanceo__lista">
                        <li class="mantenimiento__item mantenimiento-alineacion-balanceo__item">Ajuste de ángulos de alineación de las ruedas</li>
                        <li class="mantenimiento__item mantenimiento-alineacion-balanceo__item">Corrección del paralelismo y caída según especificaciones del fabricante</li>
                        <li class="mantenimiento__item mantenimiento-alineacion-balanceo__item">Balanceo de llantas y neumáticos</li>
                        <li class="mantenimiento__item mantenimiento-alineacion-balanceo__item">Detección de vibraciones en el tren de rodaje</li>
                        <li class="mantenimiento__item mantenimiento-alineacion-balanceo__item">Revisión del estado general de los neumáticos</li>
                    </ul>
                    <p class="mantenimiento__descripcion mantenimiento-alineacion-balanceo__descripcion">Este trabajo permite mejorar la maniobrabilidad del vehículo, reducir vibraciones al conducir y evitar el desgaste irregular de las llantas, lo que se traduce en una conducción más suave y segura.</p>
                    <a href="<?= BASE_URL ?>/contactanos" class="enlace-agenda">
                        <button class="boton-agendar">
                            Agenda Tu Cita Aquí
                        </button>
                    </a>
                </div>

                <div class="mantenimiento__media mantenimiento-alineacion-balanceo__media">
                    <img class="mantenimiento__image mantenimiento-alineacion-balanceo__imagen"
                        src="<?= BASE_URL ?>/public/image/otros/alineacion-balanceo-1.jpg"
                        alt="Mantenimiento Alineación y Balanceo"
                        draggable="false"
                        loading="lazy">
                </div>
            </div>
            <h2 class="titulo-marcas-seccion">Taller multimarca</h2>
            <?php require_once __DIR__ . '/../components/carousel.php' ?>
            <?php require_once __DIR__ . '/../components/how-we-work.php' ?>
        </section>

    </main>
    <?php require_once __DIR__ . '/../components/footer.php' ?>
    <?php require_once __DIR__ . '/../components/whatsapp-modal.php' ?>
</body>
<script src="<?= BASE_URL ?>/public/js/sidebar.js"></script>
<script src="<?= BASE_URL ?>/public/js/carousel.js"></script>

</html>