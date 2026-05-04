const inputImagen = document.getElementById("imagenInput");
const preview = document.getElementById("previewImagen");

inputImagen.addEventListener("change", function () {
    const archivo = this.files[0];

    if (archivo) {
        const lector = new FileReader();

        lector.onload = function (e) {
            preview.src = e.target.result;
            preview.style.display = "block";
        };

        lector.readAsDataURL(archivo);
    } else {
        preview.style.display = "none";
        preview.src = "";
    }
});