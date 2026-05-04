<!DOCTYPE html>
<html lang="en">

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
    <title>Mantenimiento Correctivo</title>
</head>

<body>
    <?php require_once __DIR__ . '/../components/navbar.php' ?>
    <main class="contenedor-principal">
        <section class="mantenimiento mantenimiento-correctivo">
            <div class="mantenimiento__contenedor mantenimiento-correctivo__contenedor">

                <div class="mantenimiento__texto mantenimiento-preventivo__texto">
                    <h1 class="mantenimiento__titulo mantenimiento-preventivo__titulo">
                        Mantenimiento Correctivo
                    </h1>
                    <p class="mantenimiento__descripcion mantenimiento-correctivo__descripcion">El <strong>mantenimiento correctivo</strong> se enfoca en la detección, diagnóstico y reparación de fallas presentes en el vehículo. Este tipo de servicio se realiza cuando un componente ya ha sufrido desgaste o daño y requiere intervención técnica especializada.</p>
                    <p class="mantenimiento__descripcion mantenimiento-correctivo__descripcion">Dentro de este servicio se incluyen:</p>
                    <ul class="mantenimiento__lista mantenimiento-correctivo__lista">
                        <li class="mantenimiento__item mantenimiento-correctivo__item">Diagnóstico de fallas mecánicas y electrónicas</li>
                        <li class="mantenimiento__item mantenimiento-correctivo__item">Reparación de motor</li>
                        <li class="mantenimiento__item mantenimiento-correctivo__item">Revisión y reparación del sistema de transmisión</li>
                        <li class="mantenimiento__item mantenimiento-correctivo__item">Reparación de suspensión y dirección</li>
                        <li class="mantenimiento__item mantenimiento-correctivo__item">Mantenimiento y reparación de frenos</li>
                        <li class="mantenimiento__item mantenimiento-correctivo__item">Solución de fallas en el sistema eléctrico</li>
                        <li class="mantenimiento__item mantenimiento-correctivo__item">Revisión y reparación del sistema de climatización</li>
                        <li class="mantenimiento__item mantenimiento-correctivo__item">Mantenimiento del sistema de enfriamiento</li>
                    </ul>
                    <!-- <p class="mantenimiento__descripcion mantenimiento-correctivo__descripcion">En Electroemisiones realizamos este tipo de trabajos con un diagnóstico previo preciso, para darte una solución efectiva y duradera. Nos enfocamos en que tu vehículo recupere su funcionamiento óptimo, brindándote seguridad y confianza al momento de conducir.</p> -->
                    <a
                        href="<?= BASE_URL ?>/contactanos"
                        class="enlace-agenda">
                        <button class="boton-agendar">
                            Agenda Tu Cita Aquí
                        </button>
                    </a>
                </div>

                <div class="mantenimiento__media mantenimiento-correctivo__media">
                    <img class="mantenimiento__image mantenimiento-preventivo__imagen"
                        src="<?= BASE_URL ?>/public/image/otros/mantenimiento-correctivo-1.webp"
                        alt="Mantenimiento correctivo automotriz"
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