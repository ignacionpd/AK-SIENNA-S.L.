<?php
require_once __DIR__ . '/../config/config.php';

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
    <title>Preguntas frecuentes | AK SIENNA SL</title>
    <meta
        name="description"
        content="Preguntas frecuentes sobre AK SIENNA SL.">
    <!--<link rel="canonical" href="https://TU-DOMINIO.com/views/preguntas_frecuentes.php">-->

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/favicon/site.webmanifest">
</head>

<body>
    <div class="mi_contenedor">
        <!-- HEADER -->
        <header class="mi_encabezado">
            <div class="cabecera_logo">
                <div class="contenedor_logo">
                    <img src="../assets/images/logo4.png" alt="logo AK SIENNA SL">

                    <div class="contenedor_empresa">
                        <h1>AK SIENNA SL</h1>
                        <p class="texto_logo">Instalaciones - Construcciones</p>
                    </div>
                </div>
            </div>

            <nav class="navigationBar">
                <ul class="navigationBarList">
                    <li><a class="enlace" href="../index.php">Inicio</a></li>
                    <li><a class="enlace" href="./empresa.php">Empresa</a></li>
                    <li><a class="enlace" href="./galeria.php">Galería</a></li>
                    <li><a class="enlace" href="./contacto.php">Contacto</a></li>
                    <li><a class="enlace active" href="#">Preguntas</a></li>
                </ul>
            </nav>
        </header>
        <!-- CUERPO PRINCIPAL-->
        <main class="mi_principal">

            <!-- CABECERA FAQ (STICKY) -->
            <div class="faq-header">
                <h2>Preguntas frecuentes</h2>
                <details class="faq-dropdown">
                    <summary>Ver todas las preguntas</summary>
                    <nav class="faq-nav">
                        <a href="#s1" class="faq-link">¿Trabajan sólo en Alicante?</a>
                        <a href="#s2" class="faq-link">¿Dan garantía por los trabajos realizados?</a>
                        <a href="#s3" class="faq-link">¿Qué trabajos realizan?</a>
                        <a href="#s4" class="faq-link">¿Realizan boletines?</a>
                        <a href="#s5" class="faq-link">¿Hacen urgencias?</a>
                    </nav>
                </details>
            </div>

            <!-- CONTENIDO -->
            <section class="faq-container">

                <article id="s1" class="faq-section">
                    <h4>¿Trabajan sólo en Alicante?</h4>
                    <p><strong>►</strong> No. También nos desplazamos fuera de la provincia.</p>
                    <button class="btn_contactar"><a href="./contacto.php">Quiero contactarme</a></button>
                </article>

                <article id="s2" class="faq-section">
                    <h4>¿Dan garantía por los trabajos realizados?</h4>
                    <p><strong>►</strong> Sí. Todos nuestros trabajos cuentan con garantía escrita, ya que trabajamos con personal cualificado y materiales de marcas de primera línea para su tranquilidad y la realización de trabajos de calidad.</p>
                    <button class="btn_contactar"><a href="./contacto.php">Quiero contactarme</a></button>
                </article>

                <article id="s3" class="faq-section">
                    <h4>¿Qué trabajos realizan?</h4>
                    <ul>
                        <li>Instalaciones internas de gas natural doméstico, comercial o industrial (instaladores matriculados de primera y segunda categoría).</li>
                        <li>Asesoramiento - Cálculo de diámetro de cañería.</li>
                        <li>Trámites de habilitación y rehabilitación. Inspecciones parciales y finales.</li>
                        <li>Extensiones de red externa para gas natural / Gestión de factibilidad.</li>
                        <li>Pruebas de hermeticidad.</li>
                        <li>Confección de Planos (incluyendo planos de combustión).</li>
                        <li>Certificacion/Relevamiento de instalación interna para gas natural. Regularización de instalaciones observadas.</li>
                        <li>Colocación, reemplazo y reparación de artefactos.</li>
                        <li>Mantenimiento de instalaciones.</li>
                        <li>Gestiones administrativas - atención al cliente/matriculado (cambios de titularidad, bajas de servicio, renovación de matrículas, etc).</li>
                    </ul>
                    <button class="btn_contactar"><a href="./contacto.php">Quiero contactarme</a></button>
                </article>

                <article id="s4" class="faq-section">
                    <h4>¿Realizan boletines?</h4>
                    <p><strong>►</strong> Sí. Realizamos boletines siempre que los trabajos los háyamos realizado nosotros.</p>
                    <button class="btn_contactar"><a href="./contacto.php">Quiero contactarme</a></button>
                </article>

                <article id="s5" class="faq-section">
                    <h4>¿Hacen urgencias?</h4>
                    <p><strong>►</strong> Sí, realizamos visitas urgentes según disponibilidad.</p>
                    <button class="btn_contactar"><a href="./contacto.php">Quiero contactarme</a></button>
                </article>
            
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
                                <img class="iconos" src="../assets/iconos/whatsapp-green.svg  " alt="teléfono AK SIENNA SL" width="30" height="30">
                                <span>(+34) 602550278</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:proyectos@aksiennasl.com.es">
                                <img class="iconos contacto_pie_icono" src="../assets/iconos/email.svg" alt="correo AK SIENNA SL" width="94" height="32">
                                <span>proyectos@aksiennasl.com.es</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- LOGO AK SIENNA SL -->
                <div>
                    <div class="logo_pie">
                        <img src="../assets/images/logo4.png" alt="logo AK SIENNA SL">
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
                        <li><a class="enlace" href="../index.php">Inicio</a></li>
                        <li><a class="enlace" href="./empresa.php">Empresa</a></li>
                        <li><a class="enlace" href="./galeria.php">Galería</a></li>
                        <li><a class="enlace" href="./contacto.php">Contacto</a></li>
                        <li><a class="enlace" href="#">Preguntas</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    <script src="../assets/scripts/v_preguntas.js"></script>
</body>

</html>