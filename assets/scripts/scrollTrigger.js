gsap.registerPlugin(ScrollTrigger);

const visual = document.querySelector(".gsap-visual");
const barras = document.querySelectorAll(".gsap-bar");

gsap.to(barras, {
    y: () => visual.offsetHeight + 10,
    ease: "none",
    scrollTrigger: {
        trigger: ".contenedor_presentacion",
        start: "top top",
        end: () => "+=" + (visual.offsetHeight * 0.8),
        scrub: 1,
        invalidateOnRefresh: true,
        markers: false
    }
});

// Recalcula AOS y ScrollTrigger cuando el vídeo defina su altura real
const videoPortada = document.querySelector("#videoPortada");

function refrescarAnimaciones() {
    AOS.refresh();
    ScrollTrigger.refresh();
}

if (videoPortada) {
    videoPortada.addEventListener("loadedmetadata", refrescarAnimaciones);
}

window.addEventListener("load", refrescarAnimaciones);