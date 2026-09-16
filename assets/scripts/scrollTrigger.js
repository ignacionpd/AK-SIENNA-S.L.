gsap.registerPlugin(ScrollTrigger);

const visual = document.querySelector(".gsap-visual");
const barras = document.querySelectorAll(".gsap-bar");

gsap.to(barras, {
    y: () => visual.offsetHeight + 10,
    ease: "none",

    scrollTrigger: {
        trigger: ".contenedor_presentacion",
        start: "top top",
        end: "bottom bottom",
        scrub: 1,
        markers: false
    }
});