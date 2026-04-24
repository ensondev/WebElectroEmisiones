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
    <title>Scanner Automotriz</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="contenedor-principal">
        <section class="mantenimiento mantenimiento-scanner-automotriz">
            <div class="mantenimiento__contenedor mantenimiento-scanner-automotriz__contenedor">
                <div class="mantenimiento__texto mantenimiento-scanner-automotriz__texto">
                    <h1 class="mantenimiento__titulo mantenimiento-scanner-automotriz__titulo">Scanner Automotriz</h1>
                    <p class="mantenimiento__descripcion mantenimiento-scanner-automotriz__descripcion">El <strong>diagnóstico electrónico</strong> permite identificar fallas mediante equipos especializados que se conectan a la computadora del vehículo, analizando códigos de error y parámetros en tiempo real.</p>
                    <p class="mantenimiento__descripcion mantenimiento-scanner-automotriz__descripcion">Dentro de este servicio se incluyen:</p>
                    <ul class="mantenimiento__lista mantenimiento-scanner-automotriz__lista">
                        <li class="mantenimiento__item mantenimiento-scanner-automotriz__item">Lectura y borrado de códigos de error</li>
                        <li class="mantenimiento__item mantenimiento-scanner-automotriz__item">Diagnóstico de sistemas electrónicos del vehículo</li>
                        <li class="mantenimiento__item mantenimiento-scanner-automotriz__item">Revisión de sensores y actuadores</li>
                        <li class="mantenimiento__item mantenimiento-scanner-automotriz__item">Análisis de parámetros en tiempo real</li>
                        <li class="mantenimiento__item mantenimiento-scanner-automotriz__item">Detección de fallas en módulos de control</li>
                        <li class="mantenimiento__item mantenimiento-scanner-automotriz__item">Evaluación del rendimiento del motor y otros sistemas</li>
                    </ul>
                    <p class="mantenimiento__descripcion mantenimiento-scanner-automotriz__descripcion">Este procedimiento permite detectar problemas con mayor precisión, optimizando el proceso de reparación y evitando cambios innecesarios de piezas.</p>
                    <a href="../pages/form-appointment.php" class="enlace-agenda">
                        <button class="boton-agendar">
                            Agenda Tu Cita Aquí
                        </button>
                    </a>
                </div>

                <div class="mantenimiento__media mantenimiento-scanner-automotriz__media">
                    <img class="mantenimiento__image mantenimiento-scanner-automotriz__imagen"
                        src="../public/image/scanner-automotriz-2.webp"
                        alt="Mantenimiento scanner automotriz"
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