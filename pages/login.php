<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/login.css">
    <title>Login ElectroEmisiones</title>
</head>

<body>
    <main class="contenedor-principal">
        <div class="contenedor-logo">
            <img class="logo" src="<?= BASE_URL ?>/public/image/logo.png" alt="logo-electroemisiones">
        </div>
        <section class="section-contenedor__form">
            <div class="contenedor-titulo__sesion">
                <h1 class="titulo-formulario">INICIAR SESION</h1>
                <p>Accede a tu cuenta y comienza a gestionar tus servicios</p>
                <p id="message" class="mensaje"></p>
            </div>
            <form class="form-login" id="form-login" onsubmit="login(event)">
                <input type="text" name="usuario" placeholder="usuario">
                <input type="password" name="password" placeholder="*******">
                <button class="boton-enviar" type="submit">iniciar sesion</button>
            </form>
        </section>
    </main>
    <script src="<?= BASE_URL ?>/public/js/auth.js"></script>
</body>

</html>