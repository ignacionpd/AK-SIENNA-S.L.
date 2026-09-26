|- README.md: La web se trata sobre una empresa española sobre instalaciones eléctricas, reformas, y construcción en general. También tiene vistas con galería de imágenes de trabajos realizados, dinámicas de la empresa, clientes reconocidos, otra de preguntas frecuentes y la de contacto con todos los datos de la empresa para poder comunicarse con ella o enviar el formulario de contacto.  

|- index.php: Es la página principal donde se encuentra una breve presentación de la empresa, junto con un carousel de imágenes de trabajos realizados y una lista con logos de algunas de las marcas con las que trabajan. Cuatro vistas mas que son las de empresa, galería, preguntas frecuentes y contacto.

|-VIEWS: Carpeta donde contendrán las vistas de las páginas que accede cualquier visitante.
|--empresa.php: Contiene información sobre las dinámicas de la empresa y sus sectores.
|--galeria.php: Contiene diversas imágenes sobre algunos de los trabajos realizados.
|--contacto.php: Vista que contiene el formulario de solicitud de contacto con la empresa y datos de contacto.
|--preguntas_frecuentes.php: Vista en la cual se describen preguntas habituales que suelen consultar los clientes a la empresa.

|-VIEWS/ERRORS/error500.html: Carpeta y archivo único que se utilizará para redirigir hacia ahí a un usuario ante cualquier error grave de la página.

|-CONTROLLERS: Carpeta que contendrá los controladores de la página web (comunicación con formularios, bases de datos, funciones, validaciones, etc)
|--c_contacto.php: Controla lo enviado por la vista contacto.php donde el usuario visitante puede enviar sus datos solicitando el contacto de la empresa, enviandosé mediante un formulario.
|--flash.php: Controlador que contiene las funciones para crear el mensaje de SESSION 'flash" en cada formulario de registro nuevo, donde almacenará los datos ingresados por el usuario o visitante, ante el caso que ese intento de envío sea incorrecto, volverá a cargar la info guardada para que la persona corrija sólo los erróneos. Luego, si se va de la página o cambia a otra web, esa variable se destruye.

|-CONTROLLERS/VALIDATIONS/v_inputData.php: Carpeta que contiene (en este caso uno solo -> v_inputData.php) los archivos con las validaciones de los datos ingresados a los formularios en cada formulario de ingreso de datos, devolviendo a los controladores los resultados de las comprobaciones necesarias (regex, por ejemplo).

|-CONFIG: Carpeta contenedora de los archivos principales referidos a la configuración y protección de cierta información.
|--config.php: Archivo donde se asegura que las páginas (que lo llamen previamente) obtengan los errores de manera más segura si los hubiesen.
|--.htaccess: Archivo que protege a config.php.

|-ASSETS: Carpeta que contendrá distintas carpetas y archivos como imágenes, hojas de estilos, scripts, etc.
|--CSS/estilos.css: Carpeta y archivo que contiene todos los estilos de la web.
|--FAVICON: Carpeta que contiene todos los archivos favicon de la web.
|--iconos: Carpeta que contiene todos los archivos de iconos de la web (email, whatsapp, etc).
|--IMAGES: Carpeta que contiene los archivos de imágnes de la web como los del encabezado, las imagenes de la presentación, archivos de logos de los clientes habituales.
|--SCRIPTS: Carpeta que contiene los archivos scripts de las distintas vistas.

|-SCRIPTS:
|---carousel.js: Controla el carousel de imágenes de index.php.
|---scrollTrigger.js: Controla el funcionamiento de la animación de las 2 barras al hacer scroll del index.php.
|---v_contacto.js: Script que controla los datos ingresados en el formulario de contacto en contacto.php.
|---v_preguntas.js: Controla el comportamiento del menú de preguntas de la página preguntas.php.

