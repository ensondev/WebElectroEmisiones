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
    <link rel="shortcut icon" href="../public/image/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <title>Sistema de Inyección</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <section class="section-info">
            <div class="container-info">
                <div class="container-text">
                    <h2>Sistema de Inyección</h2>
                    <p>El <strong>sistema de inyección</strong> es fundamental para el correcto funcionamiento del motor, ya que regula la mezcla de aire y combustible.</p>
                    <p>Dentro de este servicio se incluyen:</p>
                    <ul>
                        <li>Diagnóstico del sistema de inyección</li>
                        <li>Limpieza de inyectores (gasolina y diésel)</li>
                        <li>Pruebas de funcionamiento de inyectores</li>
                        <li>Ajuste y calibración del sistema</li>
                        <li>Revisión de presión y suministro de combustible</li>
                        <li>Detección de fallas en sensores relacionados</li>
                    </ul>
                    <p>Estos trabajos permiten recuperar la respuesta del motor, mejorar su eficiencia y optimizar el consumo de combustible, reduciendo además la emisión de gases contaminantes.</p>
                </div>
                <div class="container-img">
                    <img class="img-prevent" src="../public/image/sistema-de-inyeccion-1.jpg" alt="">
                    <a href="../pages/form-appointment.php"><button class="schedule">Agenda Tu Cita Aquí</button></a>
                </div>
            </div>

            <h2 class="sub-title">Marcas de autos</h2>
            <?php require_once '../components/carousel.php' ?>
            <?php require_once '../components/how-we-work.php' ?>
        </section>

    </main>
    <?php require_once '../components/footer.php' ?>
</body>
<script src="../public/js/sidebar.js"></script>
<script src="../public/js/carousel.js"></script>

</html>