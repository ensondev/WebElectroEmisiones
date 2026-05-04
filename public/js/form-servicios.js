const API_INSERT_HISTORY = "/webelectroemisiones/src/controllers/historial_servicios/insertController.php";
const API_READ_HISTORY = "/webelectroemisiones/src/controllers/historial_servicios/readController.php";

async function insertarServicio(event) {
    event.preventDefault();

    const form = document.querySelector(".form-servicios");
    const message = document.getElementById("message");

    const formData = new FormData(form);

    const imagenFile = formData.get("ruta_imagen");

    if (!imagenFile || imagenFile.size === 0) {
        message.textContent = "La imagen es obligatoria";
        message.style.color = "red";
        return;
    }

    try {
        const response = await fetch(API_INSERT_HISTORY, {
            method: "POST",
            body: formData // 🔥 AQUÍ VA TODO (incluye imagen)
        });

        const result = await response.json();

        if (response.ok) {
            message.textContent = result.message || "Servicio registrado";
            message.style.color = "green";

            form.reset();

            const preview = document.getElementById("previewImagen");
            if (preview) {
                preview.src = "";
                preview.style.display = "none";
            }

            mostrarHistorial(); // 🔥 refrescar lista

        } else {
            message.textContent = result.message || "Error";
            message.style.color = "red";
        }

    } catch (error) {
        console.error(error);
        message.textContent = "Error de conexión";
        message.style.color = "red";
    }
}


async function mostrarHistorial() {
    const container = document.getElementById("historial-container");
    const message = document.getElementById("message");

    // 🔥 EVITA EL ERROR
    if (!container) return;

    container.innerHTML = "<p>Cargando...</p>";
    if (message) message.textContent = "";

    try {
        const response = await fetch(API_READ_HISTORY);
        const result = await response.json();

        if (response.ok) {
            const servicios = result.data;

            if (!servicios || servicios.length === 0) {
                container.innerHTML = "<p>No hay servicios registrados</p>";
                return;
            }

            renderHistorial(servicios, container);

        } else {
            if (message) {
                message.textContent = result.message || "Error al cargar historial";
                message.style.color = "red";
            }
        }

    } catch (error) {
        console.error(error);
        if (message) {
            message.textContent = "Error de conexión";
            message.style.color = "red";
        }
    }
}

function renderHistorial(servicios, container) {
    container.innerHTML = "";

    servicios.forEach(servicio => {

        const div = document.createElement("div");
        div.classList.add("card-servicio");

        div.innerHTML = `
            <div class="card-header">
                <h3>${servicio.marca} ${servicio.modelo} del ${servicio.anio}</h3>
            </div>

            <div class="card-body">
                <p><strong>Fecha del servicio:</strong> ${new Date(servicio.fecha_registro).toLocaleDateString('es-ES')}</p>
                <p><strong>Descripción:</strong> ${servicio.descripcion}</p>
            </div>

            <div class="card-image">
                ${servicio.ruta_imagen
                ? `<img draggable="false" src="/webelectroemisiones/public/image/servicios/${servicio.ruta_imagen}" alt="imagen-servicio">`
                : `<p>Sin imagen</p>`
            }
            </div>
        `;

        container.appendChild(div);
    });
}

function formatearFecha(fecha) {
    const date = new Date(fecha);
    return date.toLocaleString();
}

document.addEventListener("DOMContentLoaded", mostrarHistorial);