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
    <title>Compra y Ventas</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="contenedor-principal">
        <section class="mantenimiento mantenimiento-compra-venta">
            <div class="mantenimiento__contenedor mantenimiento-compra-venta__contenedor">
                <div class="mantenimiento__texto mantenimiento-compra-venta__texto">
                    <h1 class="mantenimiento__titulo mantenimiento-compra-venta__titulo">Evaluación para Compra y Venta</h1>
                    <p class="mantenimiento__descripcion mantenimiento-compra-venta__descripcion">Este servicio permite conocer el estado real de un vehículo antes de comprar o vender.</p>
                    <p class="mantenimiento__descripcion mantenimiento-compra-venta__descripcion">Dentro de este servicio se incluyen:</p>
                    <ul class="mantenimiento__lista mantenimiento-compra-venta__lista">
                        <li class="mantenimiento__item mantenimiento-compra-venta__item">Inspección general del estado mecánico del vehículo</li>
                        <li class="mantenimiento__item mantenimiento-compra-venta__item">Revisión del sistema eléctrico y electrónico</li>
                        <li class="mantenimiento__item mantenimiento-compra-venta__item">Evaluación de la estructura y carrocería</li>
                        <li class="mantenimiento__item mantenimiento-compra-venta__item">Detección de fallas, desgastes o reparaciones necesarias</li>
                        <li class="mantenimiento__item mantenimiento-compra-venta__item">Verificación de componentes clave del motor y sistemas principales</li>
                        <li class="mantenimiento__item mantenimiento-compra-venta__item">Elaboración de un informe técnico del estado del vehículo</li>
                    </ul>
                    <p class="mantenimiento__descripcion mantenimiento-compra-venta__descripcion">Este análisis permite tener una visión clara del estado real del vehículo, ayudando a determinar su valor y evitando decisiones basadas en información incompleta.</p>
                    <p class="mantenimiento__descripcion mantenimiento-compra-venta__descripcion">En Electroemisiones realizamos evaluaciones detalladas y objetivas, proporcionando información confiable para que cada compra o venta se realice con total transparencia y seguridad.</p>
                    <a href="../pages/form-appointment.php" class="enlace-agenda">
                        <button class="boton-agendar">
                            Agenda Tu Cita Aquí
                        </button>
                    </a>
                </div>

                <div class="mantenimiento__media mantenimiento-compra-venta__media">
                    <img class="mantenimiento__image mantenimiento-compra-venta__imagen" 
                    src="../public/image/compra-venta-1.jpg" 
                    alt="Mantenimiento Compra y Venta"
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