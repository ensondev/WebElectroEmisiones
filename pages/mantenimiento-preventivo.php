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
    <title>Mantenimiento Preventivo</title>
</head>

<body>
    <?php require_once __DIR__ . '/../components/navbar.php' ?>
    <main class="contenedor-principal">
        <section class="mantenimiento mantenimiento-preventivo">
            <div class="mantenimiento__contenedor mantenimiento-preventivo__contenedor">
                <div class="mantenimiento__texto mantenimiento-preventivo__texto">
                    <h1 class="mantenimiento__titulo mantenimiento-preventivo__titulo">
                        Mantenimiento Preventivo
                    </h1>
                    <p class="mantenimiento__descripcion mantenimiento-preventivo__descripcion">El <strong>mantenimiento preventivo automotriz</strong> consiste en una serie de revisiones periódicas orientadas a garantizar el correcto funcionamiento del vehículo y prevenir fallas mecánicas o electrónicas que puedan generar reparaciones costosas.</p>
                    <p class="mantenimiento__descripcion mantenimiento-preventivo__descripcion">Dentro de este servicio se incluyen:</p>
                    <ul class="mantenimiento__lista mantenimiento-preventivo__lista">
                        <li class="mantenimiento__item mantenimiento-preventivo__item">Cambio de aceite y filtros</li>
                        <li class="mantenimiento__item mantenimiento-preventivo__item">Revisión del sistema de frenos</li>
                        <li class="mantenimiento__item mantenimiento-preventivo__item">Inspección de suspensión y dirección</li>
                        <li class="mantenimiento__item mantenimiento-preventivo__item">Chequeo del estado de la batería</li>
                        <li class="mantenimiento__item mantenimiento-preventivo__item">Verificación de niveles y condiciones de los fluidos</li>
                        <li class="mantenimiento__item mantenimiento-preventivo__item">Revisión general de luces y componentes eléctricos</li>
                        <li class="mantenimiento__item mantenimiento-preventivo__item">Alineación y balanceo</li>
                        <li class="mantenimiento__item mantenimiento-preventivo__item">Reemplazo de piezas según el kilometraje recomendado</li>
                    </ul>
                    <a href="<?= BASE_URL ?>/contactanos" class="enlace-agenda">
                        <button class="boton-agendar">
                            Agenda Tu Cita Aquí
                        </button>
                    </a>
                </div>

                <div class="mantenimiento__media mantenimiento-preventivo__media">
                    <img class="mantenimiento__image mantenimiento-preventivo__imagen"
                        src="<?= BASE_URL ?>/public/image/otros/mantenimiento-preventivo-2.jpg"
                        alt="Mantenimiento preventivo automotriz"
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