import Dropzone from "dropzone";

// Sidebar
document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.getElementById("menuButton");
    const menu = document.getElementById("menu");
    const overlay = document.createElement("div");

    overlay.classList.add(
        "fixed",
        "inset-0",
        "bg-black",
        "opacity-0",
        "pointer-events-none",
        "transition-opacity",
        "duration-700",
        "ease-in-out"
    );
    document.body.appendChild(overlay);

    // Hacemos que el overlay no cubra el sidebar.
    overlay.style.zIndex = "10";
    menu.style.zIndex = "20";

    menuButton.addEventListener("click", toggleMenu);

    document.addEventListener("click", function (event) {
        const isClickInsideMenu = menu.contains(event.target);
        const isClickInsideButton = menuButton.contains(event.target);

        if (
            !isClickInsideMenu &&
            !isClickInsideButton &&
            !menu.classList.contains("-translate-x-full")
        ) {
            toggleMenu();
        }
    });

    overlay.addEventListener("click", toggleMenu);

    function toggleMenu() {
        if (menu.classList.contains("-translate-x-full")) {
            menu.classList.remove("-translate-x-full");
            menu.classList.add("translate-x-0");
            overlay.classList.remove("opacity-0", "pointer-events-none");
            overlay.classList.add("opacity-50");
        } else {
            menu.classList.add("-translate-x-full");
            menu.classList.remove("translate-x-0");
            overlay.classList.add("opacity-0", "pointer-events-none");
            overlay.classList.remove("opacity-50");
        }
    }
});

// Dropzone
Dropzone.autoDiscover = false;

const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage: "Sube una imagen o arrastra y suelta aquí...",
    acceptedFiles: ".png,.jpg,.jpeg,.gif",
    addRemoveLinks: true,
    dictRemoveFile: "Eliminar",
    maxFiles: 1,
    uploadMultiple: false,
    success: function (file, response) {
        console.log("Archivo subido con éxito:", response);
    },
    error: function (file, errorMessage) {
        console.log("Error al subir el archivo:", errorMessage);
    },
});
