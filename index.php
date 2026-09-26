<?php
require_once __DIR__ . '/config/config.php';

# Comprobar si existe una sesión activa y en caso de que no así la crearemos
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | AK SIENNA SL</title>
    <meta
        name="description"
        content="AK SIENNA SL realiza construcciones e instalaciones eléctricas industriales y residenciales, montaje de cuadros eléctricos y mantenimiento para empresas y particulares.">
    <!--<link rel="canonical" href="https://TU-DOMINIO.com/">-->
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/site.webmanifest">
</head>

<body>
    <div class="mi_contenedor">
        <!-- HEADER -->
        <header class="mi_encabezado">
            <div class="cabecera_logo">
                <div class="contenedor_logo">
                    <img src="./assets/images/logo4.png" alt="logo AK SIENNA SL">

                    <div class="contenedor_empresa">
                        <h1>AK SIENNA SL</h1>
                        <p class="texto_logo">Instalaciones - Construcciones</p>
                    </div>
                </div>
            </div>

            <nav class="navigationBar">

                <ul class="navigationBarList">
                    <li><a class="enlace active" href="#">Inicio</a></li>
                    <li><a class="enlace" href="./views/empresa.php">Empresa</a></li>
                    <li><a class="enlace" href="./views/galeria.php">Galería</a></li>
                    <li><a class="enlace" href="./views/contacto.php">Contacto</a></li>
                    <li><a class="enlace" href="./views/preguntas_frecuentes.php">Preguntas</a></li>
                </ul>

            </nav>
        </header>
        <!-- CUERPO PRINCIPAL-->
        <main class="mi_principal">

            <section>
                <div class="contenedor_presentacion">
                    <div class="contenedor_presentacion_video video-wrapper">

                        <video id="videoPortada" autoplay muted loop playsinline>
                            <source src="./assets/videos/portada.mov" type="video/mp4">
                        </video>

                        <button class="btn-sonido" type="button">
                            🔇 Activar sonido
                        </button>
                    </div>
                    <div class="contenedor_presentacion_texto" data-aos="fade-up">
                        <p><b>AK SIENNA SL</b> ofrece soluciones integrales de electricidad industrial, montaje de cuadros eléctricos y mantenimiento predictivo y correctivo. Nos proyectamos como un socio técnico capaz de ejecutar proyectos de alta complejidad. Nuestros servicios están estratégicamente diseñados para maximizar la eficiencia y la seguridad de sus operaciones, garantizando el cumplimiento normativo y una ejecución precisa.</p>

                        <div class="gsap-visual">
                            <div class="gsap-bar gsap-bar-1"></div>
                            <div class="gsap-bar gsap-bar-2"></div>

                            <div class="gsap-final-line"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="valores" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <img src="./assets/images/valores.png" alt="valores AK SIENNA SL">
            </section>

            <!-- CAROUSEL -->
            <section>
                <div class="carousel-container" data-aos="fade-up"
                    data-aos-duration="3000">

                    <div class="carousel-fade">

                        <div class="carousel-slide active">
                            <img src="./assets/images/Instalación fotovoltaica 1.jpg" alt="AK SIENNA SL">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/Instalación fotovoltaica 2.jpg" alt="AK SIENNA SL">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/empresa/Áreas de Servicio y Capacidad2.jpg" alt="AK SIENNA SL">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/empresa/Áreas de Servicio y Capacidad1.jpg" alt="AK SIENNA SL">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/empresa/enfoque-licitacion.jpeg" alt="AK SIENNA SL">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/empresa/programación de obra (cronograma).jpeg" alt="AK SIENNA SL">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/Instalación fotovoltaica 6.jpg" alt="AK SIENNA SL">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/Instalación fotovoltaica 7.jpg" alt="AK SIENNA SL">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/Instalación fotovoltaica 8.jpg" alt="AK SIENNA SL">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/Instalación fotovoltaica 9.jpg" alt="AK SIENNA SL">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/Instalación fotovoltaica 10.jpg" alt="AK SIENNA SL">
                        </div>

                        <!-- Flechas -->
                        <button class="carousel-btn prev">&#10094;</button>
                        <button class="carousel-btn next">&#10095;</button>
                    </div>
                </div>
            </section>

            <section class="enlaces-container" data-aos="fade-up"
                data-aos-anchor-placement="top-center">
                <h2>Algunas marcas con las que trabajamos</h2>

                <div class="enlaces">
                    <img src="./assets/images/logos_clientes/huawei.png" alt="Huawei AK SIENNA SL">
                    <img src="./assets/images/logos_clientes/schneider.png" alt="Schneider AK SIENNA SL">
                    <img src="./assets/images/logos_clientes/legrand.png" alt="Legrand AK SIENNA SL">
                    <img src="./assets/images/logos_clientes/televes.png" alt="Televes AK SIENNA SL">
                    <img src="./assets/images/logos_clientes/spit.png" alt="Spit AK SIENNA SL">
                    <img src="./assets/images/logos_clientes/metabo.jpg" alt="Metabo AK SIENNA SL">
                    <img src="./assets/images/logos_clientes/tegui.png" alt="Tegui AK SIENNA SL">
                </div>
            </section>

        </main>
        <!-- PIE DE PÁGINA-->
        <footer class="mi_pie">

            <div class="contenedor_footer">

                <!-- TELEFONOS Y CORREO -->
                <div class="contacto_pie">
                    <ul>
                        <li>
                            <a href="https://wa.me/34602550278" target="_blank">
                                <img class="iconos" src="./assets/iconos/whatsapp-green.svg  " alt="telefono AK SIENNA SL" width="30" height="30">
                                <span>(+34) 602550278</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:proyectos@aksiennasl.com.es">
                                <img class="iconos contacto_pie_icono" src="./assets/iconos/email.svg" alt="correo AK SIENNA SL" width="94" height="32">
                                <span>proyectos@aksiennasl.com.es</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- LOGO AK SIENNA SL -->
                <div>
                    <div class="logo_pie">
                        <img src="./assets/images/logo4.png" alt="logo AK SIENNA SL">
                        <div>
                            <p>AK SIENNA SL</p>
                            <span>Instalaciones - Construcciones</span>
                            <small class="aviso_legal">&copy; Todos los derechos reservados</small>
                        </div>
                    </div>

                </div>

                <!-- NAVBAR PIE -->
                <div class="navbar_pie">
                    <ul>
                        <li><a class="enlace" href="#">Inicio</a></li>
                        <li><a class="enlace" href="./views/empresa.php">Empresa</a></li>
                        <li><a class="enlace" href="./views/galeria.php">Galería</a></li>
                        <li><a class="enlace" href="./views/contacto.php">Contacto</a></li>
                        <li><a class="enlace" href="./views/preguntas_frecuentes.php">Preguntas</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>


    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>

    <!-- ScrollTrigger -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>


    <!-- Tus scripts -->
    <script src="./assets/scripts/scrollTrigger.js"></script>
    <script src="./assets/scripts/carousel.js"></script>
    <script src="./assets/scripts/videos.js"></script>

</body>

</html>