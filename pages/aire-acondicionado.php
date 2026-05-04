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
    <title>Aire Acondicionado</title>
</head>

<body>
    <?php require_once __DIR__ . '/../components/navbar.php' ?>
    <main class="contenedor-principal">
        <section class="mantenimiento mantenimiento-aire-acondicionado">
            <div class="mantenimiento__contenedor mantenimiento-aire-acondicionado__contenedor">
                <div class="mantenimiento__texto mantenimiento-aire-acondicionado__texto">
                    <h1 class="mantenimiento__titulo mantenimiento-aire-acondicionado__titulo">Sistema de Aire Acondicionado</h1>
                    <p class="mantenimiento__descripcion mantenimiento-aire-acondicionado__descripcion">El <strong>sistema de aire acondicionado</strong> requiere mantenimiento periódico para garantizar un funcionamiento eficiente.</p>
                    <p class="mantenimiento__descripcion mantenimiento-aire-acondicionado__descripcion">Dentro de este servicio se incluyen:</p>
                    <ul class="mantenimiento__lista mantenimiento-aire-acondicionado__lista">
                        <li class="mantenimiento__item mantenimiento-aire-acondicionado__item">Inspección general del sistema de aire acondicionado</li>
                        <li class="mantenimiento__item mantenimiento-aire-acondicionado__item">Recarga de refrigerante</li>
                        <li class="mantenimiento__item mantenimiento-aire-acondicionado__item">Detección y reparación de fugas</li>
                        <li class="mantenimiento__item mantenimiento-aire-acondicionado__item">Pruebas de presión del sistema</li>
                        <li class="mantenimiento__item mantenimiento-aire-acondicionado__item">Limpieza de componentes</li>
                        <li class="mantenimiento__item mantenimiento-aire-acondicionado__item">Revisión del compresor y demás elementos principales</li>
                    </ul>
                    <p class="mantenimiento__descripcion mantenimiento-aire-acondicionado__descripcion">En Electroemisiones realizamos el mantenimiento del aire acondicionado con equipos adecuados, asegurando un funcionamiento eficiente para que disfrutes de un ambiente cómodo al conducir.</p>
                    <a href="<?= BASE_URL ?>/contactanos" class="enlace-agenda">
                        <button class="boton-agendar">
                            Agenda Tu Cita Aquí
                        </button>
                    </a>
                </div>

                <div class="mantenimiento__media mantenimiento-aire-acondicionado__media">
                    <img class="mantenimiento__image mantenimiento-aire-acondicionado__imagen"
                        src="<?= BASE_URL ?>/public/image/otros/sistema-aire-condicionado-1.jpg"
                        alt="Mantenimiento aire condicionado"
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