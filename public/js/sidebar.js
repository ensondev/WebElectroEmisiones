const botonMenu = document.getElementById('boton-menu');
const menuLateral = document.getElementById('menu-lateral');

// Abrir / cerrar con el botón
botonMenu.addEventListener('click', (e) => {
    e.stopPropagation(); // evita que el click se propague al document
    menuLateral.classList.toggle('activo');
});

// Evitar que clicks dentro del menú lo cierren
menuLateral.addEventListener('click', (e) => {
    e.stopPropagation();
});

// Cerrar al hacer click fuera
document.addEventListener('click', () => {
    if (menuLateral.classList.contains('activo')) {
        menuLateral.classList.remove('activo');
    }
});