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
    <title>Electricidad Automotriz</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="contenedor-principal">
        <section class="mantenimiento mantenimiento-electricidad-automotriz">
            <div class="mantenimiento__contenedor mantenimiento-electricidad-automotriz__contenedor">
                <div class="mantenimiento__texto mantenimiento-electricidad-automotriz__texto">
                    <h1 class="mantenimiento__titulo mantenimiento-electricidad-automotriz__titulo">Electricidad Automotriz</h1>
                    <p class="mantenimiento__descripcion mantenimiento-electricidad-automotriz__descripcion">La <strong>electricidad automotriz</strong> abarca el diagnóstico y reparación de todos los sistemas eléctricos del vehículo.</p>
                    <p class="mantenimiento__descripcion mantenimiento-electricidad-automotriz__descripcion">Dentro de este servicio se incluyen:</p>
                    <ul class="mantenimiento__lista mantenimiento-electricidad-automotriz__lista">
                        <li class="mantenimiento__item mantenimiento-electricidad-automotriz__item">Diagnóstico de fallas eléctricas</li>
                        <li class="mantenimiento__item mantenimiento-electricidad-automotriz__item">Revisión y mantenimiento de batería</li>
                        <li class="mantenimiento__item mantenimiento-electricidad-automotriz__item">Evaluación de alternador y sistema de carga</li>
                        <li class="mantenimiento__item mantenimiento-electricidad-automotriz__item">Revisión del motor de arranque</li>
                        <li class="mantenimiento__item mantenimiento-electricidad-automotriz__item">Inspección y reparación de cableado</li>
                        <li class="mantenimiento__item mantenimiento-electricidad-automotriz__item">Diagnóstico de sensores y módulos electrónicos</li>
                    </ul>
                    <p class="mantenimiento__descripcion mantenimiento-electricidad-automotriz__descripcion">Estos trabajos permiten detectar y solucionar problemas eléctricos de forma precisa, evitando fallas mayores y asegurando un funcionamiento confiable del vehículo.</p>
                    <a href="../pages/form-appointment.php" class="enlace-agenda">
                        <button class="boton-agendar">
                            Agenda Tu Cita Aquí
                        </button>
                    </a>
                </div>
                <div class="mantenimiento__media mantenimiento-electricidad-automotriz__media">
                    <img class="mantenimiento__image mantenimiento-electricidad-automotriz__imagen"
                    src="../public/image/Electricidad-Automotriz-2.jpg" 
                    alt="Mantenimiento Electricidad Automotriz"
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