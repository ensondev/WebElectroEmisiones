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
    <link rel="shortcut icon" href="<?= BASE_URL ?>/public/image/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <title>Pintura Automotriz</title>
</head>

<body>
    <?php require_once __DIR__ . '/../components/navbar.php' ?>
    <main class="contenedor-principal">
        <section class="mantenimiento mantenimiento-pintura-automotriz">
            <div class="mantenimiento__contenedor mantenimiento-pintura-automotriz__contenedor">
                <div class="mantenimiento__texto mantenimiento-pintura-automotriz__texto">
                    <h1 class="mantenimiento__titulo mantenimiento-pintura-automotriz__titulo">Pintura Automotriz</h1>
                    <p class="mantenimiento__descripcion mantenimiento-pintura-automotriz__descripcion">El servicio de <strong>pintura automotriz</strong> está orientado a la restauración estética y protección de la carrocería del vehículo, devolviéndole su apariencia original y preservando su valor.</p>
                    <p class="mantenimiento__descripcion mantenimiento-pintura-automotriz__descripcion">Dentro de este servicio se incluyen:</p>
                    <ul class="mantenimiento__lista mantenimiento-pintura-automotriz__lista">
                        <li class="mantenimiento__item mantenimiento-pintura-automotriz__item">Preparación y lijado de superficies</li>
                        <li class="mantenimiento__item mantenimiento-pintura-automotriz__item">Corrección de golpes, rayones e imperfecciones</li>
                        <li class="mantenimiento__item mantenimiento-pintura-automotriz__item">Aplicación de primer y selladores</li>
                        <li class="mantenimiento__item mantenimiento-pintura-automotriz__item">Pintura en cabina con igualación de color</li>
                        <li class="mantenimiento__item mantenimiento-pintura-automotriz__item">Acabado y pulido final</li>
                        <li class="mantenimiento__item mantenimiento-pintura-automotriz__item">Acabado y pulido final</li>
                        <li class="mantenimiento__item mantenimiento-pintura-automotriz__item">Protección contra agentes externos y corrosión</li>
                    </ul>
                    <p class="mantenimiento__descripcion mantenimiento-pintura-automotriz__descripcion">En Electroemisiones trabajamos la pintura automotriz con atención al detalle, cuidando cada etapa del proceso para lograr un acabado limpio, uniforme y acorde a las características originales del vehículo.</p>
                    <a href="<?= BASE_URL ?>/contactanos" class="enlace-agenda">
                        <button class="boton-agendar">
                            Agenda Tu Cita Aquí
                        </button>
                    </a>
                </div>

                <div class="mantenimiento__media mantenimiento-pintura-automotriz__media">
                    <img class="mantenimiento__image mantenimiento-pintura-automotriz__imagen"
                        src="<?= BASE_URL ?>/public/image/otros/pintura-automotriz-1.webp"
                        alt="Mantenimiento Pintura Automotriz"
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