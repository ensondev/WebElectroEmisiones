<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

$status = ""; // variable para controlar alertas

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
    $marca = htmlspecialchars($_POST['marca']);
    $modelo = htmlspecialchars($_POST['modelo']);
    $anio = htmlspecialchars($_POST['anio']);
    $patente = htmlspecialchars($_POST['patente']);
    $kilometraje = htmlspecialchars($_POST['kilometraje']);
    $placa = htmlspecialchars($_POST['placa']);
    $servicio = htmlspecialchars($_POST['servicio']);
    $combustible = htmlspecialchars($_POST['combustible']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'nvelez4967@utm.edu.ec';
        $mail->Password = 'erjcqwiqlegdwuos';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('nvelez4967@utm.edu.ec', 'ElectroEmisiones');
        $mail->addReplyTo($correo, $nombre);
        $mail->addAddress('nvelez4967@utm.edu.ec');

        $mail->isHTML(true);
        $mail->Subject = 'Nueva cotización - ElectroEmisiones';
        $mail->Body = "
            <h2>🔧 Nueva solicitud de cotización</h2>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Teléfono:</strong> $telefono</p>
            <p><strong>Correo:</strong> $correo</p>
            <hr>
            <p><strong>Marca:</strong> $marca</p>
            <p><strong>Modelo:</strong> $modelo</p>
            <p><strong>Año:</strong> $anio</p>
            <p><strong>Patente:</strong> $patente</p>
            <p><strong>Placa:</strong> $placa</p>
            <p><strong>Kilometraje:</strong> $kilometraje</p>
            <p><strong>Combustible:</strong> $combustible</p>
            <hr>
            <p><strong>Servicio:</strong> $servicio</p>
            <p><strong>Mensaje:</strong><br>$mensaje</p>
        ";

        $mail->send();
        $status = "ok"; // ✅ enviado correctamente
    } catch (Exception $e) {
        $status = "error"; // ❌ error al enviar
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/global-styles.css">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <link rel="stylesheet" href="../public/css/mantenimiento-preventivo.css">
    <link rel="stylesheet" href="../public/css/form-appoiment.css">
    <link rel="stylesheet" href="../public/css/carousel.css">
    <link rel="stylesheet" href="../public/css/how-we-work.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <link rel="shortcut icon" href="../public/image/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <title>Agendar Cita</title>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>
    <main class="main">
        <form class="form-appoiment" action="" method="POST" novalidate>

            <h2>Cotiza con nuestros asesores</h2>
            <p>Si quieres cotizar y agendar directamente con un asesor, llena el siguiente formulario.</p>

            <div class="form-group">
                <label>Nombre completo*</label>
                <input type="text" name="nombre" placeholder="Ej: Juan Pérez" required minlength="3" maxlength="60">
            </div>

            <div class="form-group">
                <label>Teléfono*</label>
                <input type="tel" name="telefono" placeholder="Ej: 0987654321" required pattern="[0-9]{10}">
            </div>

            <div class="form-group">
                <label>Correo electrónico*</label>
                <input type="email" name="correo" placeholder="ejemplo@gmail.com" required>
            </div>

            <div class="form-group">
                <label>Marca del vehículo*</label>
                <input type="text" name="marca" placeholder="Ej: Toyota" required minlength="2">
            </div>

            <div class="form-group">
                <label>Modelo del vehículo*</label>
                <input type="text" name="modelo" placeholder="Ej: Corolla" required minlength="2">
            </div>

            <div class="form-group">
                <label>Año del vehículo*</label>
                <input type="number" name="anio" placeholder="Ej: 2020" required min="1980" max="2026">
            </div>

            <div class="form-group">
                <label>Patente del vehículo*</label>
                <input type="text" name="patente" placeholder="Ej: ABC1234" required minlength="5">
            </div>

            <div class="form-group">
                <label>Kilometraje*</label>
                <input type="number" name="kilometraje" placeholder="Ej: 50000" required min="0">
            </div>

            <div class="form-group">
                <label>Placa*</label>
                <input type="text" name="placa" placeholder="Ej: GYE-1234" required minlength="5">
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

            <div class="form-group">
                <label>Combustible*</label>
                <select name="combustible" required>
                    <option value="">Selecciona combustible</option>
                    <option value="Gasolina">Gasolina</option>
                    <option value="Diésel">Diésel</option>
                </select>
            </div>

            <div class="form-group">
                <label>¿Cómo te ayudamos?*</label>
                <textarea name="mensaje" placeholder="Describe tu problema o solicitud..." required minlength="10"></textarea>
            </div>

            <button type="submit">Cotizar Servicio</button>


        </form>

        <section class="section-info">
            <h2 class="sub-title">Marcas de autos</h2>
            <?php require_once '../components/carousel.php' ?>
            <?php require_once '../components/how-we-work.php' ?>
        </section>
        <section class="section-map">
            <h2>TALLER ELECTRO EMISIONES</h2>
            <?php require_once '../components/map.php' ?>
        </section>
    </main>
    <?php require_once '../components/footer.php' ?>

    <script>
        <?php if ($status === "ok"): ?>
            alert("✅ Mensaje enviado correctamente");
        <?php elseif ($status === "error"): ?>
            alert("❌ Error al enviar el mensaje");
        <?php endif; ?>
    </script>
</body>
<script src="../public/js/sidebar.js"></script>
<script src="../public/js/carousel.js"></script>

</html>