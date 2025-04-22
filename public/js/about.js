// js/about.js

// Mettre en surbrillance le lien actif dans le menu (optionnel si fait en HTML)
document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll(".nav a");
    navLinks.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add("active");
        }
    });
});

// Animation sur la roadmap
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, {
    threshold: 0.3
});

document.querySelectorAll(".roadmap .step").forEach(step => {
    observer.observe(step);
});

// Bouton retour en haut
const backToTopBtn = document.createElement("button");
backToTopBtn.innerText = "↑";
backToTopBtn.className = "back-to-top";
document.body.appendChild(backToTopBtn);

backToTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

window.addEventListener("scroll", () => {
    backToTopBtn.style.display = window.scrollY > 300 ? "block" : "none";
});
