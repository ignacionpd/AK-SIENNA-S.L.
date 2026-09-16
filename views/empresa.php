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
    <title>AK SIENNA SL</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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

                <?php if (isset($_SESSION["user_data"])): ?>
                    <input type="checkbox" id="check_menu" class="check_menu">
                <?php endif; ?>

                <ul class="navigationBarList">
                    <li><a class="enlace" href="../index.php">Inicio</a></li>
                    <li><a class="enlace active" href="#">Empresa</a></li>
                    <li><a class="enlace" href="./galeria.php">Galería</a></li>
                    <li><a class="enlace" href="./contacto.php">Contacto</a></li>
                    <li><a class="enlace" href="./preguntas_frecuentes.php">Preguntas</a></li>

                    <?php if (isset($_SESSION["user_data"])): ?>
                        <li>
                            <label for="check_menu" class="label_check">
                                <img src="../assets/iconos/menu.svg" alt="Menú">
                            </label>
                        </li>
                    <?php endif; ?>
                </ul>

                <?php if (isset($_SESSION["user_data"])): ?>

                    <ul class="navigationBarListUser">
                        <li><a class="enlace" href="./user/solicitudes.php">Solicitudes</a></li>
                        <li><a class="enlace" href="./user/usuarios.php">Usuarios</a></li>
                        <li><a class="enlace" href="./user/empleados.php">Empleados</a></li>
                        <li><a class="enlace" href="./user/perfil.php">Perfil</a></li>
                        <li><a class="enlace" href="../controllers/logout.php">Cerrar sesión</a></li>
                    </ul>
                <?php endif; ?>
            </nav>
        </header>
        <!-- CUERPO PRINCIPAL-->
        <main class="mi_principal">
            <h2>Empresa</h2>

            <section class="fondo_contenedor_empresa_azul">
                <h3>Nuestro equipo</h3>
                <div class="contenedor_seccion_empresa_azul" s>
                    <div>
                        <img src="../assets/images/empresa/nosotros.jpeg" alt="Nuestro equipo">
                    </div>
                    <div>
                        <p><b>AKSIENNA S.L.</b> se consolida como una empresa referente en el sector, caracterizada por su rigor técnico, eficiencia y compromiso con la excelencia. Bajo la dirección de José Antonio Fleitas Martínez, responsable de licitaciones y desarrollo de obras, lidera un equipo altamente cualificado que ejecuta proyectos industriales de gran envergadura con precisión, planificación estratégica y cumplimiento estricto de normativas, y la Ing. Laura Martinez con su enfoque profesional en la parte técnica - administrativa, estructurando resultados óptimos, seguros y sostenibles, consolidando la confianza de sus clientes y socios en cada ejecución.</p>
                    </div>
                </div>
            </section>
            <section class="fondo_contenedor_empresa_blanco" data-aos="fade-up"
                data-aos-anchor-placement="top-center">
                <h3>Áreas de Servicio y Capacidad</h3>
                <div class="contenedor_seccion_empresa_blanco">
                    <div>
                        <p> Nuestro Compromiso es con la Ejecución Técnica de <b>Alta Calidad</b>: <br>Especialistas en <b>soluciones</b> eléctricas integrales, garantizando <b>seguridad</b>, <b>eficiencia</b> y
                            <b>cumplimiento</b> riguroso de la normativa.
                        </p>
                        <p>
                            Capacidades Clave:
                        <ul>
                            <li>Montaje y Mantenimiento de Cuadros Eléctricos</li>
                            <li>Instalaciones Industriales de Baja, Media y Alta Tensión</li>
                            <li>Evaluación continua</li>
                        </ul>
                        </p>
                        <img src="../assets/images/empresa/Áreas de Servicio y Capacidad1.jpg" alt="Áreas de Servicio y Capacidad AK SIENNA SL">
                        <img src="../assets/images/empresa/Áreas de Servicio y Capacidad4.png" alt="Áreas de Servicio y Capacidad AK SIENNA SL">
                    </div>
                    <div>
                        <img src="../assets/images/empresa/Áreas de Servicio y Capacidad2.jpg" alt="Áreas de Servicio y Capacidad AK SIENNA SL">
                        <p>
                            <b>Automatización y Control de Procesos</b>
                        <ul>
                            <li>Diseño e Integración de Sistemas</li>
                            <li>Monitoreo y Supervisión en Tiempo Real</li>
                            <li>Optimización y Eficiencia Operativa</li>
                        </ul>
                        </p>

                        <p><b>Mantenimiento Predictivo y Correctivo</b>:
                        <ul>
                            <li>Servicios programados y de emergencia</li>
                            <li>Continuidad operativa</li>
                            <li>Legalización y Certificación</li>
                        </ul>
                        </p>
                        <img src="../assets/images/empresa/Áreas de Servicio y Capacidad3.png" alt="Áreas de Servicio y Capacidad AK SIENNA SL">
                    </div>

                </div>
            </section>

            <section class="fondo_contenedor_empresa_azul" data-aos="fade-up"
                data-aos-anchor-placement="top-center">
                <h3>Propuesta de Valor y Enfoque</h3>
                <div class="contenedor_seccion_empresa_azul">
                    <div>
                        <img src="../assets/images/empresa/Propuesta de valor y enfoque.jpeg" alt="Propuesta de Valor y Enfoque AK SIENNA SL">
                    </div>
                    <div>
                        <p>Nos entusiasma presentar nuestra propuesta de valor, diseñada para establecer una asociación técnica y estratégica con Grupo Cobra que garantice la ejecución óptima de su licitación de obra. Definimos el alcance y la metodología para asegurar resultados con calidad, seguridad y cumplimiento de plazos (ingeniería de detalle, planificación, QA/QC, comisionado, “as built ”, manuales y formación).</p>
                    </div>
                </div>
            </section>

            <section class="fondo_contenedor_empresa_blanco" data-aos="fade-up"
                data-aos-anchor-placement="top-center">
                <h3>Programación de Obra (Cronograma)</h3>
                <div class="contenedor_seccion_empresa_blanco">
                    <div>
                        <p> <b>Hitos sugeridos:</b> <br> Ingeniería → Suministros → Montaje → Pruebas y Puesta en Marcha.</p>
                        <p>
                            <b>Seguimiento:</b> reportes semanales de avance, control de riesgos, coordinación de actividades y entregables.(Sustituir por semanas/fechas reales del proyecto.)
                        </p>
                    </div>
                    <div>
                        <img src="../assets/images/empresa/programación de obra (cronograma).jpeg" alt="Programación de Obra (Cronograma) AK SIENNA SL">
                    </div>
                </div>
            </section>

            <section class="fondo_contenedor_empresa_azul" data-aos="fade-up"
                data-aos-anchor-placement="top-center">
                <h3>Enfoque de Licitación</h3>
                <div class="contenedor_seccion_empresa_azul">
                    <div>
                        <img src="../assets/images/empresa/enfoque-licitacion.jpeg" alt="Enfoque de Licitación AK SIENNA SL">
                    </div>
                    <div>
                        <p> <b>Enfoque en la Licitación:</b> Por la naturaleza de este dossier, la propuesta económica específica se detalla en el <b>pliego técnico adjunto</b>, adaptado a las especificaciones del proyecto. Nuestro compromiso es presentar una <b>oferta robusta y competitiva</b>, garantizando máxima calidad técnica y cumplimiento de plazos.
                        </p>
                    </div>
                </div>
            </section>

            <section class="fondo_contenedor_empresa_blanco" data-aos="fade-up"
                data-aos-anchor-placement="top-center">
                <h3>Contratos y Documentación</h3>
                <div class="contenedor_seccion_empresa_blanco">
                    <div>
                        <p>
                        <ul>
                            <li>Contrato / Pedido de obra.</li>
                            <li>PSS y Evaluaciones de Riesgo.</li>
                            <li>Plan de Calidad (ITPs, checklists, trazabilidad).</li>
                            <li>Certificados de materiales, ensayos y conformidad CE.</li>
                            <li>Protocolos: aislamiento, continuidad, protecciones.</li>
                            <li>Planos “as built”, manuales y dossier de cierre.</li>
                        </ul>
                        Estamos convencidos de que esta propuesta reforzará la infraestructura eléctrica y operativa de su proyecto con Grupo Cobra y facilitará un desarrollo <b>seguro y de alto desempeño.</b> Nuestro equipo, liderado por José Antonio Fleitas Martínez, queda a disposición para ajustar cualquier aspecto técnico o de cronograma, alineándonos con sus objetivos. Gracias por su tiempo y consideración.

                        </p>
                    </div>
                    <div>
                        <img src="../assets/images/empresa/contratos-documentacion-obra.jpeg" alt="Contratos y Documentación AK SIENNA SL">
                    </div>
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
                            <img class="iconos" src="../assets/iconos/whatsapp-green.svg" alt="telefono AK SIENNA SL" width="30" height="30">
                            <a href="https://wa.me/34602550278" target="_blank">(+34) 602550278</a>
                        </li>
                        <li>
                            <img class="iconos contacto_pie_icono" src="../assets/iconos/email.svg" alt="correo AK SIENNA SL" width="94" height="32">
                            <a href="mailto:proyectos@aksiennasl.com.es">proyectos@aksiennasl.com.es</a>
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
                        <li><a class="enlace" href="#">Empresa</a></li>
                        <li><a class="enlace" href="./galeria.php">Galería</a></li>
                        <li><a class="enlace" href="./contacto.php">Contacto</a></li>
                        <li><a class="enlace" href="./preguntas_frecuentes.php">Preguntas</a></li>
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

    <!-- SCRIPTS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>