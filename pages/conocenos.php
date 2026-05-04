<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/global-styles.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/navbar.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/conocenos.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/carousel.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/how-we-work.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/whatsapp-modal.css">
    <link rel="shortcut icon" href="<?= BASE_URL ?>/public/image/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <title>Sobre nosotros</title>
</head>

<body>
    <?php require_once __DIR__ . '/../components/navbar.php' ?>
    <div class="contenedor-linea__imagen">
        <h2>SOBRE NOSOTROS</h2>
    </div>
    <main class="contenedor-principal">
        <section class="contenedor-conocenos">
            <div class="sub-contenedor__conocenos">
                <div class="contenedor-imagen__conocenos">
                    <img src="<?= BASE_URL ?>/public/image/otros/conocenos_img.webp" alt="imagen de trabajador dandole mantenimiento a un vehiculo">
                </div>
                <div class="contenedor-text__conocenos">
                    <h2 class="titulo-conocenos">Sobre ElectroEmisiones</h2>
                    <p class="conocenos-descripcion">
                        En ElectroEmisiones nacimos con un propósito claro: brindar un servicio automotriz confiable, preciso y transparente, elevando el estándar de atención en el sector. Desde nuestros inicios, nos hemos enfocado en ofrecer soluciones técnicas reales, respaldadas por conocimiento especializado y un compromiso absoluto con la calidad.
                        Somos un taller automotriz integral, orientado tanto al diagnóstico avanzado como a la reparación eficiente de vehículos modernos. Entendemos que cada automóvil requiere un análisis específico, por lo que trabajamos con procesos estructurados que nos permiten identificar fallas con exactitud y garantizar intervenciones seguras y duraderas.
                        Nuestro equipo está conformado por técnicos capacitados en sistemas electrónicos y mecánicos, lo que nos permite abordar desde mantenimientos preventivos hasta reparaciones complejas en motor, transmisión, sistema eléctrico y control electrónico. Cada servicio que realizamos está basado en criterios técnicos, evitando soluciones improvisadas y priorizando siempre la seguridad del cliente.
                        En ElectroEmisiones creemos que la confianza se construye con hechos. Por eso, trabajamos con transparencia en cada diagnóstico, explicando claramente el estado del vehículo y las soluciones recomendadas. Nuestro objetivo no es solo reparar, sino generar tranquilidad y respaldo en cada cliente que confía en nosotros.
                        Ubicados en Guayaquil, hemos ido consolidándonos como un taller de referencia gracias a nuestro enfoque profesional, atención responsable y compromiso constante con la mejora continua. Cada vehículo que ingresa a nuestras instalaciones es tratado con el mismo nivel de exigencia y cuidado, porque entendemos que detrás de cada auto hay una persona que necesita seguridad y confianza.
                    </p>
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