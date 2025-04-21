// Animation des articles dans la section "Actualités"
document.querySelectorAll('.news-item').forEach(item => {
    item.addEventListener('mouseenter', () => {
        item.style.transform = 'scale(1.05)';
        item.style.transition = 'transform 0.3s ease';
    });

    item.addEventListener('mouseleave', () => {
        item.style.transform = 'scale(1)';
    });
});

// Gestion du menu déroulant (dropdown)
document.addEventListener("DOMContentLoaded", function () {
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
        const menu = dropdown.querySelector('.dropdown-menu');

        dropdown.addEventListener('click', (event) => {
            event.stopPropagation(); // Empêche la propagation pour éviter une fermeture immédiate

            // Ferme tous les autres dropdowns avant d'ouvrir celui-ci
            document.querySelectorAll('.dropdown-menu').forEach(d => {
                if (d !== menu) d.style.display = 'none';
            });

            // Toggle l'affichage du dropdown sélectionné
            menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
        });
    });

    // Ferme le dropdown si on clique n'importe où ailleurs
    document.addEventListener("click", function () {
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.style.display = 'none';
        });
    });

});

// Gestion du menu mobile (toggle menu)
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const navMenu = document.getElementById("nav-menu");

    menuToggle.addEventListener("click", function (event) {
        event.stopPropagation();

        navMenu.style.display = (navMenu.style.display === "flex") ? "none" : "flex";
    });
});

// Transformer un div en lien cliquable
document.querySelectorAll(".grid-item").forEach(div => {
    div.addEventListener("click", function () {
        window.location.href = this.getAttribute("data-url");
    });
});

