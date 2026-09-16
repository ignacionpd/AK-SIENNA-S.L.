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
                    <li><a class="enlace" href="./empresa.php">Empresa</a></li>
                    <li><a class="enlace active" href="#">Galería</a></li>
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
            <h2>Galería</h2>

            <section class="galeria-container">
                <div class="galeria" >
                    <img src="../assets/images/1.jpg" alt="AK SIENNA SL" >
                    <img src="../assets/images/2.jpg" alt="AK SIENNA SL">
                    <img src="../assets/images/3.jpg" alt="AK SIENNA SL">
                    <img src="../assets/images/4.jpg" alt="AK SIENNA SL">
                    <img src="../assets/images/5.jpg" alt="AK SIENNA SL">
                    <img src="../assets/images/6.jpg" alt="AK SIENNA SL">
                    <img src="../assets/images/7.jpg" alt="AK SIENNA SL">
                    <img src="../assets/images/8.jpg" alt="AK SIENNA SL">
                    <img src="../assets/images/9.jpg" alt="AK SIENNA SL">
                    <img src="../assets/images/10.jpg" alt="AK SIENNA SL">
                    <img src="../assets/images/11.jpg" alt="AK SIENNA SL">
                    <img src="../assets/images/12.jpg" alt="AK SIENNA SL">
                    <img src="../assets/images/13.jpg" alt="AK SIENNA SL">
                    <img src="../assets/images/empresa/contratos-documentacion-obra.jpeg" alt="AK SIENNA SL" >
                    <img src="../assets/images/empresa/enfoque-licitacion.jpeg" alt="AK SIENNA SL">
                    <img src="../assets/images/empresa/nosotros.jpeg" alt="AK SIENNA SL">
                    <img src="../assets/images/empresa/programación de obra (cronograma).jpeg" alt="AK SIENNA SL">
                    <img src="../assets/images/empresa/Propuesta de valor y enfoque.jpeg" alt="AK SIENNA SL">
                    <img src="../assets/images/empresa/Áreas de Servicio y Capacidad1.jpg" alt="AK SIENNA SL">
                    <img src="../assets/images/empresa/Áreas de Servicio y Capacidad2.jpg" alt="AK SIENNA SL">
                    <img src="../assets/images/empresa/Áreas de Servicio y Capacidad3.png" alt="AK SIENNA SL">
                    <img src="../assets/images/empresa/Áreas de Servicio y Capacidad4.png" alt="AK SIENNA SL">
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
                        <li><a class="enlace" href="./empresa.php">Empresa</a></li>
                        <li><a class="enlace" href="#">Galería</a></li>
                        <li><a class="enlace" href="./contacto.php">Contacto</a></li>
                        <li><a class="enlace" href="./preguntas_frecuentes.php">Preguntas</a></li>
                    </ul>
                </div>
            </div>
        </footer>

    </div>

    <!-- SCRIPTS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>