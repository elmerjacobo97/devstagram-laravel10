import "./bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.getElementById("menuButton");
    const menu = document.getElementById("menu");
    const overlay = document.createElement("div");
    const themeToggle = document.getElementById("themeToggle");
    const body = document.getElementById("body");
    const moonIcon = document.getElementById("moonIcon");
    const sunIcon = document.getElementById("sunIcon");

    overlay.classList.add(
        "fixed",
        "inset-0",
        "bg-black",
        "opacity-50",
        "hidden",
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
            !menu.classList.contains("hidden")
        ) {
            toggleMenu();
        }
    });

    overlay.addEventListener("click", toggleMenu);

    function toggleMenu() {
        if (menu.classList.contains("-translate-x-full")) {
            menu.classList.remove("hidden", "-translate-x-full");
            menu.classList.add("translate-x-0");
            overlay.classList.remove("hidden"); // Mostrar el overlay
        } else {
            menu.classList.add("hidden", "-translate-x-full");
            menu.classList.remove("translate-x-0");
            overlay.classList.add("hidden"); // Ocultar el overlay
        }
    }
});
