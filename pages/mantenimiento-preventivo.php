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
    <title>Mantenimiento Preventivo</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
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
                    <a href="../pages/form-appointment.php" class="enlace-agenda">
                        <button class="boton-agendar">
                            Agenda Tu Cita Aquí
                        </button>
                    </a>
                </div>

                <div class="mantenimiento__media mantenimiento-preventivo__media">
                    <img class="mantenimiento__image mantenimiento-preventivo__imagen"
                        src="../public/image/mantenimiento-preventivo-2.jpg"
                        alt="Mantenimiento preventivo automotriz"
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