<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/navbar.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/register.css">
    <title>Registro - ElectroEmisiones</title>
</head>

<body>
    <main class="contenedor-principal">
        <div class="contenedor-logo">
            <img class="logo" src="<?= BASE_URL ?>/public/image/logo.png" alt="logo-electroemisiones">
        </div>

        <section class="section-contenedor__form">
            <div class="contenedor-titulo__sesion">
                <h1 class="titulo-formulario">CREAR CUENTA</h1>
                <p>Regístrate para comenzar a usar el sistema</p>
                <p id="message" class="mensaje"></p>
            </div>

            <form class="form-register" id="form-register" onsubmit="register(event)">
                <input type="text" name="nombres" placeholder="Nombres">
                <input type="text" name="apellidos" placeholder="Apellidos">
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="password" placeholder="Contraseña">
                
                <button class="boton-enviar" type="submit">
                    Registrarse
                </button>
            </form>
        </section>
    </main>

    <script src="<?= BASE_URL ?>/public/js/protectedRoute.js"></script>
    <script src="<?= BASE_URL ?>/public/js/auth.js"></script>
</body>

</html>