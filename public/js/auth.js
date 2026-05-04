const API_URL_REGISTER = '/webelectroemisiones/src/controllers/auth/register.php';
const LOGIN_API_URL = "/webelectroemisiones/src/controllers/auth/login.php";

async function register(event) {
    event.preventDefault();

    const form = document.getElementById("form-register");
    const message = document.getElementById("message");
    message.textContent = ""; // limpiar mensaje previo

    const formData = new FormData(form);
    const data = Object.fromEntries(formData.entries());

    if (!data.nombres || !data.apellidos || !data.usuario || !data.password) {
        message.textContent = "Todos los campos son obligatorios";
        message.style.color = "red";
        return;
    }

    try {
        const response = await fetch(API_URL_REGISTER, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        });

        const result = await response.json();

        if (response.ok) {
            message.textContent = result.message || "Cuenta creada correctamente";
            message.style.color = "green";

            setTimeout(() => {
                window.location.href = "/webelectroemisiones/login";
            }, 1500);

        } else {
            message.textContent = result.message || "Error en el registro";
            message.style.color = "red";
        }

    } catch (error) {
        console.error(error);
        message.textContent = "Error de conexión con el servidor";
        message.style.color = "red";
    }
}

async function login(event) {
    event.preventDefault();

    const message = document.getElementById("message");
    message.textContent = "";

    const form = document.getElementById("form-login");
    const formData = new FormData(form);

    const data = {
        usuario: formData.get("usuario"),
        password: formData.get("password")
    };

    if (!data.usuario || !data.password) {
        message.textContent = "Usuario y contraseña son obligatorios";
        message.style.color = "red";
        return;
    }

    try {
        const response = await fetch(LOGIN_API_URL, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        });

        const result = await response.json();

        if (result.success && result.data?.access_token) {
            form.reset();

            sessionStorage.setItem('access_token', result.data.access_token);

            setTimeout(() => {
                window.location.href = '/webelectroemisiones/dashboard';
            }, 500);

        } else {
            message.textContent = result.message || "Credenciales incorrectas";
            message.style.color = "red";

            setTimeout(() => {
                message.textContent = '';
            }, 2000);
        }

    } catch (error) {
        console.error(error);
        message.textContent = "Error de conexión con el servidor";
        message.style.color = "red";
    }
}

function logout() {
    sessionStorage.removeItem('access_token');
    window.location.href = '/webelectroemisiones/login';
}


/*===== FUNCION ACTUALIZAR IMAGEN DE PERFIL =====*/ /*
async function updateImageProfile(event) {
    event.preventDefault();

    const form = document.getElementById('form_edit-profile');
    const fileInput = document.getElementById('new_image');
    const formData = new FormData(form);  // Creamos un objeto FormData para enviar el archivo
    const token = sessionStorage.getItem('access_token');

    if (fileInput.files.length === 0) {
        alert('Por favor, selecciona una imagen');
        return;
    }

    // Añadir el archivo al FormData
    formData.append('imagen_perfil', fileInput.files[0]);

    try {
        const response = await fetch(
            '/servicios-app/backend/public/profile-image',
            {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${token}`,
                },
                body: formData  // Enviar el FormData que contiene el archivo
            }
        );

        const result = await response.json();

        if (result.success) {
            showToast('Imagen de perfil actualizada correctamente', 'success');
            closeModal();

            // Actualizar la imagen en la UI
            document.getElementById('imagen_perfil').src = URL.createObjectURL(fileInput.files[0]);

        } else {
            showToast(result.message || 'Error al actualizar la imagen de perfil', 'error');
        }
    } catch (error) {
        console.error('Error al actualizar la imagen de perfil:', error);
        // alert('Error al conectar con el servidor'); 
    }
}  */
