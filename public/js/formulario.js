const API_URL = '/webelectroemisiones/src/controllers/citas/insertController.php';
const API_ACCEPT = "/webelectroemisiones/src/controllers/citas/acceptController.php";
const API_REJECT = "/webelectroemisiones/src/controllers/citas/rejectController.php";
const API_DELETE = "/webelectroemisiones/src/controllers/citas/softDeleteController.php";

async function cita(event) {
    event.preventDefault();

    const form = document.getElementById("form-appoiment");
    const message = document.getElementById("message");
    message.textContent = "";

    const formData = new FormData(form);
    const data = Object.fromEntries(formData.entries());

    if (!data.nombre_cliente || !data.telefono || !data.correo || !data.marca || !data.modelo || !data.anio || !data.placa || !data.kilometraje || !data.combustible || !data.servicio || !data.mensaje) {
        message.textContent = "Todos los campos son obligatorios";
        message.style.color = "red";
        return;
    }

    try {
        const response = await fetch(API_URL, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        });

        const result = await response.json();

        if (response.ok) {
            message.textContent = result.message || "Cita enviada correctamente";
            message.style.color = "green";
        } else {
            message.textContent = result.message || "Error al enviar la cita";
            message.style.color = "red";
        }

        setTimeout(() => {
            message.textContent = "";
        }, 2000);

        form.reset();

    } catch (error) {
        console.error(error);
        message.textContent = "Error de conexión con el servidor";
        message.style.color = "red";
    }
}

const API_READ_URL = "/webelectroemisiones/src/controllers/citas/readController.php";

async function mostrarCitas() {

    const tbody = document.getElementById("citas-body");
    if (!tbody) return;
    
    const message = document.getElementById("message");
    if (message) message.textContent = "";

    tbody.innerHTML = `<tr><td colspan="7">Cargando...</td></tr>`;
    message.textContent = "";

    try {
        const response = await fetch(API_READ_URL, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });
        const result = await response.json();

        if (response.ok) {
            const citas = result.data;

            if (!citas || citas.length === 0) {
                tbody.innerHTML = `<tr><td colspan="7">No hay citas registradas</td></tr>`;
                return;
            }

            renderTable(citas, tbody);

        } else {
            message.textContent = result.message || "Error al cargar citas";
            message.style.color = "red";
        }

    } catch (error) {
        console.error(error);
        message.textContent = "Error de conexión con el servidor";
        message.style.color = "red";
    }
}

function renderTable(citas, tbody) {
    tbody.innerHTML = "";

    citas.forEach((cita, index) => {
        const tr = document.createElement("tr");

        tr.classList.add(`estado-${cita.estado}`);

        const acciones = cita.estado === "pendiente"
            ? `
                <button class="btn-aceptar" onclick="aceptarCita(event, ${cita.id_cita})">
                    <i class="fa-solid fa-check"></i>
                </button>

                <button class="btn-rechazar" onclick="rechazarCita(event, ${cita.id_cita})">
                    <i class="fa-solid fa-xmark"></i>
                </button>
              `
            : `
                <span class="estado-texto">${cita.estado}</span>
              `;

        tr.innerHTML = `
            <td>${index + 1}</td>
            <td>${cita.nombre_cliente}</td>
            <td>${cita.telefono}</td>
            <td>${cita.marca} ${cita.modelo} (${cita.anio})</td>
            <td>${cita.placa}</td>
            <td>${cita.servicio}</td>
            <td>${new Date(cita.fecha_creacion).toLocaleDateString('es-ES')}</td>

            <td class="acciones">
                ${acciones}

                <button class="btn-eliminar" onclick="eliminarCita(${cita.id_cita})">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </td>
        `;

        tbody.appendChild(tr);
    });
}

function formatFecha(fecha) {
    const date = new Date(fecha);
    return date.toLocaleString();
}

async function aceptarCita(event, id) {
    const button = event.currentTarget;
    try {
        button.disabled = true;
        button.innerHTML = "...";

        const response = await fetch(API_ACCEPT, {
            method: "PUT",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ id_cita: id })
        });

        const result = await response.json();

        if (response.ok) {
            await mostrarCitas(); // recarga tabla
        } else {
            console.error(result.message);
        }

    } catch (error) {
        console.error("Error aceptar cita:", error);
    }
}

async function rechazarCita(event, id) {
    const button = event.currentTarget;
    try {
        button.disabled = true;
        button.innerHTML = "...";

        const response = await fetch(API_REJECT, {
            method: "PUT",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ id_cita: id })
        });

        const result = await response.json();

        if (response.ok) {
            await mostrarCitas();
        } else {
            console.error(result.message);
        }

    } catch (error) {
        console.error("Error rechazar cita:", error);
    }
}

async function eliminarCita(id) {
    if (!confirm("¿Seguro que deseas eliminar esta cita?")) return;

    try {
        const response = await fetch(API_DELETE, {
            method: "DELETE",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ id_cita: id })
        });

        const result = await response.json();

        if (response.ok) {
            await mostrarCitas();
        } else {
            console.error(result.message);
        }

    } catch (error) {
        console.error("Error eliminar cita:", error);
    }
}

// cargar al iniciar
document.addEventListener("DOMContentLoaded", mostrarCitas);