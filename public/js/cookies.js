document.addEventListener("DOMContentLoaded", function () {
    const banner = document.getElementById("cookie-banner");
    const modal = document.getElementById("cookie-modal");

    const acceptBtn = document.getElementById("accept-cookies");
    const rejectBtn = document.getElementById("reject-cookies");
    const configBtn = document.getElementById("config-cookies");
    const saveBtn = document.getElementById("save-preferences");

    const analyticsCheckbox = document.getElementById("analytics-cookies");
    const marketingCheckbox = document.getElementById("marketing-cookies");

    // Mostrar banner si no hay decisión
    if (!localStorage.getItem("cookieConsent")) {
        setTimeout(() => banner.classList.add("show"), 300);
    }

    // ACEPTAR TODO
    acceptBtn.addEventListener("click", () => {
        localStorage.setItem("cookieConsent", "accepted");
        localStorage.setItem("analytics", "true");
        localStorage.setItem("marketing", "true");
        hideBanner();
    });

    // RECHAZAR TODO
    rejectBtn.addEventListener("click", () => {
        localStorage.setItem("cookieConsent", "rejected");
        localStorage.setItem("analytics", "false");
        localStorage.setItem("marketing", "false");
        hideBanner();
    });

    // ABRIR CONFIGURACIÓN
    configBtn.addEventListener("click", () => {
        modal.style.display = "flex";
    });

    // GUARDAR CONFIGURACIÓN
    saveBtn.addEventListener("click", () => {
        localStorage.setItem("cookieConsent", "custom");
        localStorage.setItem("analytics", analyticsCheckbox.checked);
        localStorage.setItem("marketing", marketingCheckbox.checked);

        modal.style.display = "none";
        hideBanner();
    });

    function hideBanner() {
        banner.classList.remove("show");
        setTimeout(() => banner.style.display = "none", 500);
    }
});