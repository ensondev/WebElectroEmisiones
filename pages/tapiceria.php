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
    <title>Mantenimiento de Tapicería</title>
</head>

<body>
    <?php require_once __DIR__ . '/../components/navbar.php' ?>
    <main class="contenedor-principal">
        <section class="mantenimiento mantenimiento-tapiceria">
            <div class="mantenimiento__contenedor mantenimiento-tapiceria__contenedor">
                <div class="mantenimiento__texto mantenimiento-tapiceria__texto">
                    <h1 class="mantenimiento__titulo mantenimiento-tapiceria__titulo">Mantenimiento de Tapicería</h1>
                    <p class="mantenimiento__descripcion mantenimiento-tapiceria__descripcion">El servicio de <strong>tapicería automotriz</strong> está enfocado en la renovación y conservación del interior del vehículo, mejorando tanto su apariencia como su confort.</p>
                    <p class="mantenimiento__descripcion mantenimiento-tapiceria__descripcion">Dentro de este servicio se incluyen:</p>
                    <ul class="mantenimiento__lista mantenimiento-tapiceria__lista">
                        <li class="mantenimiento__item mantenimiento-tapiceria__item">Limpieza profunda de asientos y superficies interiores</li>
                        <li class="mantenimiento__item mantenimiento-tapiceria__item">Reparación de desgastes, roturas y costuras</li>
                        <li class="mantenimiento__item mantenimiento-tapiceria__item">Retapizado de asientos y paneles</li>
                        <li class="mantenimiento__item mantenimiento-tapiceria__item">Mantenimiento de techos interiores</li>
                        <li class="mantenimiento__item mantenimiento-tapiceria__item">Limpieza y acondicionamiento de alfombras y pisos</li>
                        <li class="mantenimiento__item mantenimiento-tapiceria__item">Restauración de detalles interiores</li>
                    </ul>
                    <p class="mantenimiento__descripcion mantenimiento-tapiceria__descripcion">Este trabajo permite recuperar la estética del interior del vehículo y mejorar la experiencia de conducción, manteniendo los materiales en buen estado por más tiempo.</p>
                    <a href="<?= BASE_URL ?>/contactanos" class="enlace-agenda">
                        <button class="boton-agendar">
                            Agenda Tu Cita Aquí
                        </button>
                    </a>
                </div>

                <div class="mantenimiento__media mantenimiento-tapiceria__media">
                    <img class="mantenimiento__image mantenimiento-tapiceria__imagen"
                        src="<?= BASE_URL ?>/public/image/otros/tapiceria-1.jpg"
                        alt="Mantenimiento Tapiceria Automotriz"
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