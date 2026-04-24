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
    <link rel="stylesheet" href="../public/css/whatsapp-modal.css">
    <link rel="shortcut icon" href="../public/image/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <title>Cambio de Vidrios</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="contenedor-principal">
        <section class="mantenimiento mantenimiento-cambio-de-vidrios">
            <div class="mantenimiento__contenedor mantenimiento-cambio-de-vidrios__contenedor">
                <div class="mantenimiento__texto mantenimiento-cambio-de-vidrios__texto">
                    <h1 class="mantenimiento__titulo mantenimiento-cambio-de-vidrios__titulo">Cambio de Vidrios</h1>
                    <p class="mantenimiento__descripcion mantenimiento-cambio-de-vidrios__descripcion">Se realizan trabajos de reparación y sustitución de parabrisas y cristales laterales, atendiendo daños como fisuras, impactos o desprendimientos. Cada intervención se ejecuta con materiales y técnicas especializadas, asegurando un ajuste preciso, resistencia adecuada y un acabado confiable acorde a los estándares de seguridad.</p>
                    <p class="mantenimiento__descripcion mantenimiento-cambio-de-vidrios__descripcion">Dentro de este servicio se incluyen:</p>
                    <ul class="mantenimiento__lista mantenimiento-cambio-de-vidrios__lista">
                        <li class="mantenimiento__item mantenimiento-cambio-de-vidrios__item">Reparación de pequeñas fisuras y golpes en el vidrio</li>
                        <li class="mantenimiento__item mantenimiento-cambio-de-vidrios__item">Sustitución de parabrisas delantero y trasero</li>
                        <li class="mantenimiento__item mantenimiento-cambio-de-vidrios__item">Cambio de vidrios laterales</li>
                        <li class="mantenimiento__item mantenimiento-cambio-de-vidrios__item">Sellado y ajuste para evitar filtraciones</li>
                        <li class="mantenimiento__item mantenimiento-cambio-de-vidrios__item">Revisión del correcto asentamiento del cristal</li>
                        <li class="mantenimiento__item mantenimiento-cambio-de-vidrios__item">Limpieza y acabado final de instalación</li>
                    </ul>
                    <p class="mantenimiento__descripcion mantenimiento-cambio-de-vidrios__descripcion">Este trabajo se realiza asegurando un ajuste preciso y una correcta fijación, lo que garantiza visibilidad, resistencia y seguridad durante la conducción.</p>
                    <a href="../pages/form-appointment.php" class="enlace-agenda">
                        <button class="boton-agendar">
                            Agenda Tu Cita Aquí
                        </button>
                    </a>
                </div>

                <div class="mantenimiento__media mantenimiento-cambio-de-vidrios__media">
                    <img class="mantenimiento__image mantenimiento-cambio-de-vidrios__imagen"
                    src="../public/image/vidrios-automotrices-1.jpg" 
                    alt="Mantenimiento Cambio de Vidrio Automotriz"
                    draggable="false"
                    loading="lazy">
                </div>
            </div>
            <h2 class="titulo-marcas-seccion">Taller multimarca</h2>
            <?php require_once '../components/carousel.php' ?>
            <?php require_once '../components/how-we-work.php' ?>
        </section>
    </main>
    <?php require_once '../components/footer.php' ?>
    <?php require_once '../components/whatsapp-modal.php' ?>
</body>
<script src="../public/js/sidebar.js"></script>
<script src="../public/js/carousel.js"></script>

</html>