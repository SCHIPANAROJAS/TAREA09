<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/iconogeneral.png" type="image/x-icon">
    <title>GP&A SERVICIOS GENERALES</title>
    <link rel="stylesheet" href="estilo1.css">
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/estilomodal.css">
    <script src="script.js" defer></script>
    <script src="scp/script2.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <!-- Botón del Chatbot -->
    <a id="chatbot" href="#">
        <img src="./images/vchat1.png" alt="Chatbot">
    </a>

    <!-- Contenedor del Chatbot -->
    <div class="wrapper" style="display: none;">
        <div class="title">
            <span>GP&A</span>
            <button class="refresh-btn">⟳</button>
            <button class="close-btn">⤬</button>
        </div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon"></div>
                <div class="msg-header">
                    <p>Bienvenido a GP&A SERVICIOS GENERALES. ¿En qué puedo ayudarte?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Escribe algo aquí..." required>
                <button id="send-btn">⟶</button>
            </div>
        </div>
    </div>

    <!-- Seccion 1 -->
    <div>
        <section class="container">
            <div class="sidebar">
                <img class="logo" src="images/logo.png" alt="Logo GP&A">
                <div class="texto1">
                    <h1>DONDE CADA</h1>
                    <h1>NÚMERO CUENTA Y </h1>
                </div>
                <div class="texto2">
                    <h1>CADA CLIENTE IMPORTA</h1>
                </div>
                <div class="info">
                   <P>Te brindamos un servicio contable, laboral, financiero y tributario; te asesoramos para la consolidación y crecimiento de tu empresa.</P>
                   <button id="scrollButton" onclick="scrollToForm()">Realizar consulta</button>    
                </div>
            </div>
            <div class="imagen-grande">
                <img src="https://img.freepik.com/foto-gratis/vista-superior-gerente-empleado-que-trabajan-equipo-oficina-negocios-mirando-graficos-pantalla-computadora-portatil_482257-2443.jpg?t=st=1715972724~exp=1715976324~hmac=3d4d26b8b3979a9ea02be6d91775b21c5fa65eec3eeed4c341e31ce5168203f2&w=740" alt="">
            </div>
        </section>
    </div>
    
    <!-- Seccion 2 -->
    <div>
        <section>
            <div class="section-2">
                <div class="text-box">
                    <img class="logo1" src="images/icono1.png" alt="Resultados Rápidos">
                    <h2>Resultados rápidos</h2>
                    <p>Confía en la eficiencia y calidad de nuestros procesos</p>
                </div>
                <div class="text-box">
                    <img class="logo1" src="images/icono2.png" alt="Atención Personalizada">
                    <h2>Atención Personalizada</h2>
                    <p>Disponemos de un equipo profesional disponible las 24/7</p>
                </div>
                <div class="text-box">
                    <img class="logo1" src="images/icono3.png" alt="Excelencia de trabajo">
                    <h2>Excelencia de trabajo</h2>
                    <p>Nuestros resultados nos posicionan entre los mejores en análisis financiero oficial</p>
                </div>
                <div class="text-box">
                    <img class="logo1" src="images/icono4.png" alt="Asesoría Empresarial">
                    <h2>Asesoría Empresarial</h2>
                    <p>Ofrecemos consultoría en cualquier área de negocio</p>
                </div>                
            </div>
            <div class="img-p">
                <img src="https://img.freepik.com/fotos-premium/demostracion-hombre-negocios-aumentar-inversion-cuota-mercado_35761-54.jpg?w=996" alt="Imagen Empresarial">
            </div>
        </section>
    </div>

    <!-- Seccion 3 -->
    <div>
        <section>
            <div class="flex-container" >
                <div class="right-content">
                    <div class="contenedor-prin">
                        <div class="contenedor-1">
                            <h1>Contabilidad</h1>
                            <p>Registramos y reportamos la información financiera de tu empresa para ofrecerte
                            una visión clara de tu situación económica y resultados operativos.</p>
                        </div>
                        <div class="contenedor-1">
                            <h1>Planilla/Nómina</h1>
                            <p>Gestionamos el registro completo de salarios, beneficios y deducciones de tu equipo, 
                            incluyendo horas trabajadas y contribuciones.</p>
                        </div>
                        <div class="contenedor-1">
                            <h1>Analisis Financiero</h1>
                            <p>Gestionamos y evaluamos el desempeño y estabilidad de una empresa usando herramientas 
                            como ratios financieros y estados financieros.</p>
                        </div>  
                        <div class="contenedor-1">
                            <h1>Declaracion de Renta</h1>
                            <p>Presentamos informes sobre los ingresos, gastos y deducciones de los contribuyentes para
                            determinar el impuesto a pagar.</p>
                        </div>
                    </div>
                </div>
                <div class="left-content">
                    <img src="https://img.freepik.com/foto-gratis/hombre-negocios-acertado-joven-que-sienta-lugar-trabajo-fondo-oficina_176420-5282.jpg?t=st=1716106312~exp=1716109912~hmac=e9906ff74cc139d7814ee07e6bcd353f02d7e9f0aa22a0955ebecfa494c9d090&w=740" alt="Imagen Empresarial">
                </div>
            </div>
        </section>
    </div>

    <!-- Seccion 4 -->
    <div>
        <section>
            <div class="service-page">
                <div class="service-box">
                    <img class="service-icon" src="images/icon1.png" alt="">
                    <h2>Contabilidad Financiera</h2>
                    <p class="special-margin">● Preparación de Estados Financieros: Balance general, Estado de Resultados, y Flujo de Efectivo.</p>
                    <p class="special-margin">● Informes y Declaraciones de Impuestos: Presentación y análisis detallado.</p>
                </div>
                <div class="service-box">
                    <img class="service-icon" src="images/icon2.png" alt="">
                    <h2>Declaraciones de Renta y Municipio</h2>
                    <p>Asesoría y preparación de declaraciones de renta y cumplimiento de obligaciones municipales.</p>
                </div>
                <div class="service-box">
                    <img class="service-icon" src="images/icon3.png" alt="">
                    <h2>Impuestos</h2>
                    <p>Gestión y optimización fiscal: cálculos, presentaciones y asesoramiento para personas y empresas.</p>
                </div>
                <div class="service-box">
                    <img class="service-icon" src="images/icon4.png" alt="">
                    <h2>Planilla/Nómina</h2>
                    <p>Administración de nóminas: cálculo de salarios, deducciones, beneficios y cumplimiento con normativas.</p>
                </div>
                <div class="service-box">
                    <img class="service-icon" src="images/icon5.png" alt="">
                    <h2>Asesorías Financieras - Personal/Empresarial</h2>
                    <p>Asesoría y preparación de declaraciones de renta y cumplimiento de obligaciones municipales.</p>
                </div>
                <div class="service-box">
                    <img class="service-icon" src="images/icon6.png" alt="">
                    <h2>Auditorías Externas</h2>
                    <p>Realización de auditorías externas para garantizar la transparencia y cumplimiento normativo.</p>
                </div>
                <div class="service-box">
                    <img class="service-icon" src="images/icon7.png" alt="">
                    <h2>Otros Trámites</h2>
                    <p>Gestión de diversos trámites administrativos y financieros necesarios para su negocio.</p>
                </div>
                <div class="service-box">
                    <img class="service-icon" src="images/icon8.png" alt="">
                    <h2>Otros Servicios</h2>
                    <p>Una gama completa de servicios adicionales para apoyar las necesidades financieras y contables de su empresa.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Seccion 5 -->
    <div>
        <section id="contact-form-section">
            <div class="container-formulario">
                <div class="formulario-contenido">
                    <div class="formulario-texto">
                        <h1>CONTACTA A</h1>
                        <h1>NUESTRO</h1>
                        <h1>EQUIPO</h1>
                        <p>¿Tienes preguntas sobre contabilidad, impuestos o necesitas información sobre nuestros servicios y planes? No dudes en comunicarte con nosotros; estamos aquí para asistirte con gusto.</p>
                        <form id="contact-form" class="contact-form">
                            <div class="form-group">
                                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="asunto" name="asunto" placeholder="Asunto" required>
                            </div>
                            <div class="form-group">
                                <textarea id="mensaje" name="mensaje" placeholder="Mensaje (opcional)"></textarea>
                            </div>
                            <button type="submit">Contáctanos</button>
                        </form>
                    </div>
                    <div class="formulario-imagen">
                        <img src="https://img.freepik.com/foto-gratis/retrato-mujer-trabajadora-servicio-al-cliente_144627-37943.jpg?t=st=1718155054~exp=1718158654~hmac=064c34a6ba7edf3ee68e73a0b51074d422897bfbcc8daf7f67d1281d5da08c0c&w=740" alt="Imagen de Contacto">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Mensaje de formulario -->
    <div>
        <div id="successModal" class="modal">
            <div class="modal-content">
            <span class="close">&times;</span>
            <p>Datos correctamente registrados</p>
            <button id="modalButton" class="modal-button">Aceptar</button>
        </div>
    </div>
</body>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-logo">
            <a href="sesion">
                <img src="./images/logologo.png" alt="Logo">
            </a>  
        </div>
        <div class="footer-info">
            <div class="footer-item">
                <img src="./images/logo2.png" alt="Teléfono">
                <span>990 445 454</span>
            </div>
            <div class="footer-item">
                <img src="./images/logo1.png" alt="Facebook">
                <a href="https://www.facebook.com/profile.php?id=100065166324477" class="footer-link">
                <span>GPYA Servicios Generales</span>
                </a>
            </div>
            <div class="footer-item">
                <img src="./images/logo3.png" alt="Correo">
                <a href="https://mail.google.com/mail/u/0/#inbox" class="footer-link">
                <span>gpadilla@gpaservicios.com</span>
                </a>
            </div>
        </div>
        <div class="footer-table">
            <table>
                <tr>
                    <th>Empresa</th>
                    <th>Contabilidad</th>
                    <th>Idioma</th>
                </tr>
                <tr>
                    <td>Profesionales</td>
                    <td>Servicios</td>
                    <td>Español</td>
                </tr>
                <tr>
                    <td>Clientes</td>
                    <td></td>
                    <td>Inglés</td>
                </tr>
                <tr>
                    <td>Sobre nosotros</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</footer>
</html>
