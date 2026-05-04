<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/03b5683281.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/global-styles.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/dashboard.css">
    <title>Dashboard</title>
</head>

<body>
    <main class="contenedor-principal">
        <div class="contenedor-logo">
            <img draggable="false" class="logo" src="<?= BASE_URL ?>/public/image/logo.png" alt="logo-electroemisiones">
            <div class="contenedor-botones">
                <button class="crear-usuario_boton" id="btn-crear-usuario" style="display: none;"><a href="<?= BASE_URL ?>/register">Crear usuario</a></button>
                <button class="logout" onclick="logout()">cerrar sesión</button>
            </div>
        </div>
        <div class="contenedor-sections">
            <section class="contenedor-section__citas">
                <h2 class="sub-titulo__citas">Listado de Citas</h2>
                <div class="tabla-scroll">

                    <table class="tabla-citas">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Cliente</th>
                                <th>Teléfono</th>
                                <th>Vehículo</th>
                                <th>Placa</th>
                                <th>Servicio</th>
                                <th>Fecha</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="citas-body">
                            <tr>
                                <td colspan="7">Cargando...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="contenedor-section__servicios">
                <h2 class="sub-titulo__citas">Agregar Servicio</h2>
                <p id="message" class="mensaje"></p>
                <form class="form-servicios" enctype="multipart/form-data" onsubmit="insertarServicio(event)">
                    <div class="form-img__group">
                        <div class="form-group">
                            <label>Imagen del vehículo</label>
                            <!-- <input type="file" name="ruta_imagen" id="imagenInput" required> -->
                            <input class="ruta_imagen" name="ruta_imagen" type="file" accept="image/*" id="imagenInput" require>
                        </div>
                        <div class="preview-container">
                            <img id="previewImagen" src="" alt="Vista previa" style="display:none; max-width:200px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Marca*</label>
                        <input class="marca" type="text" name="marca" required placeholder="Ej: Toyota">
                    </div>
                    <div class="form-group">
                        <label>Modelo*</label>
                        <input class="modelo" type="text" name="modelo" required placeholder="Ej: Corolla">
                    </div>
                    <div class="form-contenedor__group">
                        <div class="form-group">
                            <label>Año del vehículo*</label>
                            <input type="number" name="anio" placeholder="Ej: 2020" required min="1980" max="2026">
                        </div>
                        <div class="form-group">
                            <label>Combustible*</label>
                            <select name="combustible" required>
                                <option value="">Selecciona combustible</option>
                                <option value="gasolina">Gasolina</option>
                                <option value="diesel">Diésel</option>
                                <option value="hibrido">Híbrido</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Descripción del servicio*</label>
                        <textarea name="descripcion" required placeholder="Describe el servicio realizado"></textarea>
                    </div>

                    <button class="boton-enviar" type="submit">Guardar servicio</button>
                </form>
            </section>
        </div>
    </main>
    <script src="<?= BASE_URL ?>/public/js/protectedRoute.js"></script>
    <script src="<?= BASE_URL ?>/public/js/auth.js"></script>
    <script src="<?= BASE_URL ?>/public/js/formulario.js"></script>
    <script src="<?= BASE_URL ?>/public/js/preview-image.js"></script>
    <script src="<?= BASE_URL ?>/public/js/form-servicios.js"></script>
</body>

</html>