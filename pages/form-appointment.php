<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/global-styles.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/navbar.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/maintenances.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/form-appoiment.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/carousel.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/how-we-work.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/map.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/whatsapp-modal.css">
    <link rel="shortcut icon" href="<?= BASE_URL ?>/public/image/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <title>Agendar Cita</title>
</head>

<body>
    <?php require_once __DIR__ . '/../components/navbar.php' ?>
    <div class="container-img_contact">
        <h2>CONTACTANOS</h2>
    </div>
    <main class="main">
        <form class="form-appoiment" id="form-appoiment" onsubmit="cita(event)">

            <div class="group-container-1">
                <div class="group-text">
                    <h2>Cotiza con nuestros asesores</h2>
                    <p>Si quieres cotizar y agendar directamente con un asesor, llena el siguiente formulario.</p>
                    <p id="message" class="mensaje"></p>
                </div>
                <div class="group-client">
                    <div class="form-group">
                        <label>Nombre completo*</label>
                        <input type="text" name="nombre_cliente" placeholder="Ej: Juan Pérez" required minlength="3" maxlength="60">
                    </div>
                    <div class="form-group">
                        <label>Teléfono*</label>
                        <input type="tel" name="telefono" placeholder="Ej: 0987654321" required pattern="[0-9]{10}">
                    </div>
                    <div class="form-group">
                        <label>Correo electrónico*</label>
                        <input type="email" name="correo" placeholder="ejemplo@gmail.com" required>
                    </div>
                </div>
            </div>

            <div class="group-container-vehicle">
                <div class="group-vehicle-1">
                    <div class="form-group">
                        <label>Marca del vehículo*</label>
                        <input type="text" name="marca" placeholder="Ej: Toyota" required minlength="2">
                    </div>
                    <div class="form-group">
                        <label>Modelo del vehículo*</label>
                        <input type="text" name="modelo" placeholder="Ej: Corolla" required minlength="2">
                    </div>
                </div>
                <div class="group-vehicle-2">
                    <div class="form-group">
                        <label>Año del vehículo*</label>
                        <input type="number" name="anio" placeholder="Ej: 2020" required min="1980" max="2026">
                    </div>
                    <div class="form-group">
                        <label>Placa*</label>
                        <input type="text" name="placa" placeholder="Ej: GYE-1234" required minlength="5">
                    </div>
                    <div class="form-group">
                        <label>Kilometraje*</label>
                        <input type="number" name="kilometraje" placeholder="Ej: 50000" required min="0">
                    </div>
                </div>
            </div>

            <div class="group-container-others">
                <div class="form-group">
                    <label>Combustible*</label>
                    <select name="combustible" required>
                        <option value="">Selecciona combustible</option>
                        <option value="Gasolina">Gasolina</option>
                        <option value="Diésel">Diésel</option>
                        <option value="Hibrido">Hibrido</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Servicio*</label>
                    <select name="servicio" required>
                        <option value="">Selecciona un servicio</option>
                        <option value="Mantenimiento Preventivo">Mantenimiento Preventivo</option>
                        <option value="Mantenimiento Correctivo">Mantenimiento Correctivo</option>
                        <option value="Diagnóstico">Diagnóstico</option>
                        <option value="Sistema de Inyección">Sistema de Inyección</option>
                        <option value="Aire Acondicionado">Aire Acondicionado</option>
                        <option value="Electricidad Automotriz">Electricidad Automotriz</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>¿Cómo te ayudamos?*</label>
                <textarea name="mensaje" placeholder="Describe tu problema o solicitud..." required minlength="10"></textarea>
            </div>

            <button class="boton-enviar" type="submit">Cotizar Servicio</button>
        </form>

        <h2 class="titulo-marcas-seccion">Taller multimarca</h2>
        <?php require_once __DIR__ . '/../components/carousel.php' ?>
        <?php require_once __DIR__ . '/../components/how-we-work.php' ?>
    </main>

    <?php require_once __DIR__ . '/../components/footer.php' ?>
    <?php require_once __DIR__ . '/../components/whatsapp-modal.php' ?>

    <!-- Toast / Modal flotante -->
    <div id="toast" class="toast">
        <span id="toast-message"></span>
    </div>
    <script src="<?= BASE_URL ?>/public/js/sidebar.js"></script>
    <script src="<?= BASE_URL ?>/public/js/carousel.js"></script>
    <script src="<?= BASE_URL ?>/public/js/formulario.js"></script>
</body>

</html>