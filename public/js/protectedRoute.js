const token = sessionStorage.getItem('access_token');

if (!token) {
    window.location.href = '/webelectroemisiones/login';
    throw new Error('No token');
}

fetch('/webelectroemisiones/src/controllers/users/readController.php', {
    method: 'GET',
    headers: {
        Authorization: `Bearer ${token}`
    }
})
.then(res => {
    if (res.status === 401 || res.status === 403) {
        sessionStorage.removeItem('access_token');
        window.location.href = '/webelectroemisiones/login';
        throw new Error('Unauthorized');
    }

    return res.json();
})
.then(result => {
    if (!result.success || !result.data) {
        console.warn('No se pudo obtener el perfil del usuario');
        return;
    }

    const { usuario, fecha_registro, imagen_perfil, rol } = result.data;

    const btnCrearUsuario = document.getElementById('btn-crear-usuario');

    if (rol === 'administrador') {
        btnCrearUsuario.style.display = 'inline-block';
    }
    
    const userEl = document.getElementById('usuario');
    const dateEl = document.getElementById('fecha');
    const imgEl  = document.getElementById('imagen_perfil');

    if (userEl) userEl.textContent = usuario;
    if (dateEl) dateEl.textContent = new Date(fecha_registro).toLocaleDateString();

    if (imgEl) {
        imgEl.src = imagen_perfil
            ? `/webelectroemisiones/public/image/perfil/${imagen_perfil}`
            : '/webelectroemisiones/public/image/perfil/no-profile.png';
    }
})
.catch(err => {
    console.error('Error al cargar perfil:', err);
});
