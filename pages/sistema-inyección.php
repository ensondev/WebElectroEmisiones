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
    <title>Sistema de Inyección</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="contenedor-principal">
        <section class="mantenimiento mantenimiento-sistema-inyeccion">
            <div class="mantenimiento__contenedor mantenimiento-sistema-inyeccion__contenedor">
                <div class="mantenimiento__texto mantenimiento-sistema-inyeccion__texto">
                    <h1 class="mantenimiento__titulo mantenimiento-sistema-inyeccion__titulo">Sistema de Inyección</h1>
                    <p class="mantenimiento__descripcion mantenimiento-sistema-inyeccion__descripcion">El <strong>sistema de inyección</strong> es fundamental para el correcto funcionamiento del motor, ya que regula la mezcla de aire y combustible.</p>
                    <p class="mantenimiento__descripcion mantenimiento-sistema-inyeccion__descripcion">Dentro de este servicio se incluyen:</p>
                    <ul class="mantenimiento__lista mantenimiento-sistema-inyeccion__lista">
                        <li class="mantenimiento__item mantenimiento-sistema-inyeccion__item">Diagnóstico del sistema de inyección</li>
                        <li class="mantenimiento__item mantenimiento-sistema-inyeccion__item">Limpieza de inyectores (gasolina y diésel)</li>
                        <li class="mantenimiento__item mantenimiento-sistema-inyeccion__item">Pruebas de funcionamiento de inyectores</li>
                        <li class="mantenimiento__item mantenimiento-sistema-inyeccion__item">Ajuste y calibración del sistema</li>
                        <li class="mantenimiento__item mantenimiento-sistema-inyeccion__item">Revisión de presión y suministro de combustible</li>
                        <li class="mantenimiento__item mantenimiento-sistema-inyeccion__item">Detección de fallas en sensores relacionados</li>
                    </ul>
                    <p class="mantenimiento__descripcion mantenimiento-sistema-inyeccion__descripcion">Estos trabajos permiten recuperar la respuesta del motor, mejorar su eficiencia y optimizar el consumo de combustible, reduciendo además la emisión de gases contaminantes.</p>
                    <a href="../pages/form-appointment.php" class="enlace-agenda">
                        <button class="boton-agendar">
                            Agenda Tu Cita Aquí
                        </button>
                    </a>
                </div>

                <div class="mantenimiento__media mantenimiento-sistema-inyeccion__media">
                    <img class="mantenimiento__image mantenimiento-sistema-inyeccion__imagen"
                        src="../public/image/sistema-de-inyeccion-1.jpg"
                        alt="Mantenimiento Sistema de Inyección"
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