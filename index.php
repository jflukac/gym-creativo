<?php

if(isset($_POST['submit']))
{
    $to = "marcoslukac@gmail.com";
    $subject = "Consultas desde web GYM Creativo";
    $txt = $_POST['message'];
    $headers .= "Reply-To: GymCreativo <marcoslukac@gmail.com>\r\n";
    $headers .= "Return-Path: GymCreativo <marcoslukac@gmail.com>\r\n";
    $headers .= "From:  GymCreativo <marcoslukac@gmail.com>\r\n";

    if(empty($UserName) || empty($Email) || empty($Phone) || empty($Msg))
        {
            header('location:index.php/#chateamos?error');
        }
        else
        {
            if(mail($to,$subject,$txt,$headers))
            {
                header("location:index.php/#chateamos?success");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Creativo</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <script src="https://kit.fontawesome.com/ce17e9ddbf.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../public/images/fondocursos.png" type="image/png" >
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <header class="encabezado" id="encabezado">
        <div class="encabezado-div">
            <div class="encabezado-logo">
                <img class="encabezado-logo-imagen" src="../public/design/logo-horizontal-fondo-claro-chato.png" alt="imagen de prueba">
            </div>
            <nav class="encabezado-navbar">
                <input type="checkbox" id="menu" class="navbar-checkbox">
                <label for="menu"><i class="menu-icon fas fa-bars fa-lg"></i></label>
                <div class="navbar-collapsible-menu">
                    <ul class="collapsible-menu-list">
                        <li>
                            <a href="#gym-creativo" class="menu-list-links">??QUE ES EL GYM CREATIVO</a>
                        </li>
                        <li>
                            <a href="#sobre-mi" class="menu-list-links">SOBRE MI</a>
                        </li>
                        <li>
                            <a href="#cursos" class="menu-list-links">CURSOS</a>
                        </li>
                        <li>
                            <a href="#capacitaciones-empresariales" class="menu-list-links">CAPACITACIONES</a>
                        </li>
                        <li>
                            <a href="#chateamos" class="menu-list-links">??CHARLEMOS!</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>  
    </header>
    <main class="main">
        <section id="gym-creativo" class="gym-creativo">
            <div class="gym-creativo-div">
                <div class="gym-creativo-imagen">
                    <img src="../public/images/lightbulb.png" class="lightbulb">    
                </div>
                <div class="gym-creativo-texto">
                    <h2 class="titulos">??Qu?? es el <br>Gym Creativo?</h2>
                    <p class="blue-text" style="font-size: 1.3em; padding: 0 20px 0 0;">Es un espacio que te ayuda a romper la l??gica y salir de tu zona de confort generando ideas disruptivas e innovadoras para aplicarlas en tus proyectos.<br><br><b>Porque todos podemos ser m??s creativos, solo tenemos que entrenarnos.</b></p>
                    <p class="orange-text"><b>??Ya contamos con +1000 participantes de todo Hispanoam??rica!</b></p>
                </div>
            </div>  
        </section>
        <section id="sobre-mi">
            <svg xmlns="../public/images/wave (1).svg" viewBox="0 120 1440 250"><path fill="#FFF" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,229.3C384,245,480,235,576,218.7C672,203,768,181,864,192C960,203,1056,245,1152,256C1248,267,1344,245,1392,234.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            <div class="sobre-mi-texto">
                
                <h2 class="titulos" style="color: #ffffff;">Sobre m??</h2>
                <p class="white-text" style="font-size: 1.3em;">Soy Actor y Licenciado en Administraci??n de <br>Empresas estos dos mundos que parecen distantes <br>me generan una amplitud de conocimientos que <br>consegui unirlos en el GymCreativo. </p>
                <p class="white-text" style="font-size: 1.3em;">Soy Scrum Master y Product Owner certi???cado por <br>ITBA y  Jeff Sutherland, tambi??n me especialic?? en <br>Design Thinking (Brother Barcelona), Gami???cation <br>(Wharton school, USA).</p>
                <p class="white-text" style="font-size: 1.3em;">Hago improvisaci??n teatral desde hace 10 a??os y <br>disfruto de actuar en cine, televisi??n y teatro.</p>
            </div>
            <svg xmlns="../public/images/wave.svg" viewBox="0 0 1440 300"><path fill="#22418a" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,154.7C384,160,480,224,576,218.7C672,213,768,139,864,128C960,117,1056,171,1152,197.3C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </section>  

        <section class="creatividad" id="cursos">
            <div><h2 class="titulos" style="color: #ffffff;">Cursos y talleres</h2></div>
            <div class="creatividad-texto">
                <p>La creatividad no es un golpe de suerte, descubre como ser m??s <br>creativo para tu emprendimientio, un proyecto personal o para tu vida.  </p>
                <p><b>??Encuentra el curso que mejor se adapte a tus metas!</b></p>
            </div>
            <div class="card-slider owl-carousel owl-theme">
                <div class="card item">
                    <img src="../public/images/fondocursos.png">
                    <div class="card-text">
                        <p><b>Curso de Desarrollo Creativo</b></p>
                        <p>Duraci??n: 4 clases<br>Online en vivo<br>Cupos limitados</p>
                        <button onclick="document.getElementById('modal1').style.display='block'; 
                        document.getElementById('back-to-top').style.display='none'; 
                        document.getElementById('whatsapp').style.display='none'" class="quiero-saber-mas trigger" data-toggle="modal" data-target="#modal-1" id="openmodal1">??QUIERO SABER M??S!</button>
                    </div>
                </div>
                <div class="card item">
                    <img src="../public/images/fondocursos.png">
                    <div class="card-text">
                        <p><b>Mentor??as<br>&nbsp;</b></p>
                        <p>Duraci??n: 4/8 encuentros<br>Online en vivo<br>Personalizado</p>
                        <button onclick="document.getElementById('modal2').style.display='block'; 
                        document.getElementById('back-to-top').style.display='none'; 
                        document.getElementById('whatsapp').style.display='none'" class="quiero-saber-mas trigger" data-toggle="modal" data-target="#modal-2">??QUIERO SABER M??S!</button>
                    </div>
                </div>
                <div class="card item">
                    <img src="../public/images/fondocursos.png">
                    <div class="card-text">
                        <p><b>Improvisaci??n Teatral<br>&nbsp;</b></p>
                        <p>Duraci??n: 12 clases<br>Online en vivo<br>Cupos limitados</p>
                        <button onclick="document.getElementById('modal3').style.display='block'; 
                        document.getElementById('back-to-top').style.display='none'; 
                        document.getElementById('whatsapp').style.display='none'" class="quiero-saber-mas trigger" data-toggle="modal" data-target="#modal-3">??QUIERO SABER M??S!</button>
                    </div>
                </div>
                <div class="card item">
                    <img src="../public/images/fondocursos.png">
                    <div class="card-text">
                        <p><b>Workshop para<br>emprendedores</b></p>
                        <p>Duraci??n: 1 clase<br>Online en vivo<br>&nbsp;</p>
                        <button onclick="document.getElementById('modal4').style.display='block'; 
                        document.getElementById('back-to-top').style.display='none'; 
                        document.getElementById('whatsapp').style.display='none'" class="quiero-saber-mas trigger" data-toggle="modal" data-target="#modal-4">??QUIERO SABER M??S!</button>
                    </div>
                </div>
            </div>
            
        </section>
        

        <section id="capacitaciones-empresariales" class="capacitaciones-empresariales">
            
                <svg xmlns="../public/images/wave (1).svg" viewBox="0 0 1440 320"><path fill="#22418a" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,229.3C384,245,480,235,576,218.7C672,203,768,181,864,192C960,203,1056,245,1152,256C1248,267,1344,245,1392,234.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            
            <h3 class="titulos">Capacitaciones Empresariales</h3>
            <p style="max-width: 500px; text-align:center">Cada organizaci??n tiene necesidades y objetivos ??nicos, por eso trabajamos en equipo facilitando distintas metodolog??as y din??micas para cumplir sus metas. 
            </p>
            <h4>??Qu?? podemos hacer juntos?</h4>
            <div id="juntos">
                <ul>
                    <li>- Design Thinking</li>
                    <li>- Metolog??as ??giles: Scrum</li>
                    <li>- Desarrollo Creativo</li>
                </ul>
                <ul>
                    <li>- Generaci??n de ideas innovadoras</li>
                    <li>- Mejora del trabajo en equipo</li>
                    <li>- Resoluci??n de problemas</li>
                </ul>
            </div>

            <h4>??Organizaciones con las que trabaj??!</h4>
            <div class="capacitaciones-empresariales-logos">
                <div class="logo-empresa"><img src="../public/images/EMPRESAS_CEREBRO.png" alt="logo-empresa"></div>
                <div class="logo-empresa"><img src="../public/images/EMPRESAS_MALBA.png" alt="logo-empresa"></div>
                <div class="logo-empresa"><img src="../public/images/EMPRESAS_MEDIFE.png" alt="logo-empresa"></div>
                <div class="logo-empresa"><img src="../public/images/EMPRESAS_PASTO.png" alt="logo-empresa"></div>
                <div class="logo-empresa"><img src="../public/images/EMPRESAS_PYLV.png" alt="logo-empresa"></div>
                <div class="logo-empresa"><img src="../public/images/EMPRESAS_RUTA.png" alt="logo-empresa"></div>
                <div class="logo-empresa"><img src="../public/images/EMPRESAS_SI.png" alt="logo-empresa"></div>
            </div>
            <svg xmlns="../public/images/wave.svg" viewBox="0 0 1440 320">
                <path fill="#ea9423" fill-opacity="1" 
                d="M0,256L48,229.3C96,203,192,149,288,154.7C384,160,480,224,576,218.7C672,213,768,139,864,128C960,117,1056,171,1152,197.3C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </section>
        <section id="chateamos" class="chateamos">

            <div class="chateamos-contenido">
                <h3 class="titulos white-text">Charlemos</h3>
                <div class="charlemos">
                    <div class="redes">
                    <p>Si ten??s dudas o quer??s mas informaci??n, <br> ??escribime!</p>
                    <a href="https://www.instagram.com/gymcreativo/" class="footer-links" target="blanck"><i class="fab fa-instagram fa-lg white-text"></i></a>
                    <a href="https://wa.me/5491160186557" class="footer-links" target="blanck"><i class="fab fa-whatsapp fa-lg white-text"></i></a>    
                    <a href="https://www.linkedin.com/in/santiago-caranza-256723bb/" class="footer-links" target="blanck"><i class="fab fa-linkedin fa-lg white-text"></i></a>
                    </div>
                    <form action="mail_handler.php" method="post" class="form-y-boton">
                        <div >
                                <input class="chateamos-input" type="text" name="name" id="name" placeholder="Nombre:">
                                <input class="chateamos-input" type="tel" name="cell" id="cell" placeholder="Celular:">
                                <input class="chateamos-input" type="email" name="email" id="email" placeholder="E-mail:">
                                <textarea class="chateamos-input" name="message" id="chateamos-message" cols="30" rows="6" placeholder="Mensaje:"></textarea>
                                <div class="g-recaptcha" data-sitekey="6Lcscz0aAAAAAOVzpoBuJFLeGiptMDCjjlp02hvp"></div>
                                <input type="submit" name="submit" value="Enviar" class="chateamos-boton">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
    </main>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('modal1').style.display='none'; 
            document.getElementById('back-to-top').style.display='initial'; 
            document.getElementById('whatsapp').style.display='initial'" class="close">&times;</span>
            <!-- <div class="modal-titulo">
                <h2 class="titulos" style="color: #22418a;">Cursos y talleres</h2>
            </div> -->
            <div class="modal-content-info">
                <div class="modal-content-descripcion">
                    <img class='curso-imagen' src="../public/images/fondocursos.png" alt="">
                    <div>
                        <h2>Curso de Desarrollo Creativo</h2>
                        <p>Los cursos son 90% practica 10% teor??a. 
                            De forma divertida y din??mica realizamos ejercicios (orales, f??sicos o escritos) para estimular nuestra neuroplasticidad, 
                            generar nuevas conexiones neuronales y desarrollar la creatividad para poder resolver nuestros problemas de formas diferentes. 
                            Evadir los baches creativos, tener m??s ideas y poder ver nuestra problem??tica desde distintos puntos de vista.</p>
                        <p>Duraci??n: 4 clases de 1:30hs <br>
                        Online en vivo <br>
                        Clases de hasta 12 participantes</p>
                        <div class="modal-quiero-inscribirme">
                            <a href="https://wa.me/5491160186557?text=Hola,%20quiero%20inscribirme%20en%20el%20curso%20de%20Desarrolla%20tu%20creatividad!!" 
                            target="blanck">??QUIERO INSCRIBIRME!</a>
                        </div>
                    </div>
                </div>
                <div class="etapas-programa"><h3>Programa</h3></div>
                <div class="etapas">
                    <div class="clases-descripci??n">
                        <h5>Etapa 1:</h5>
                        <p>Introducci??n a la creatividad con ejercicios para dejar de criticar mis ideas, evitar el NO y encontrar nuevos puntos de vista. Duraci??n 4 clases.</p>
                    </div>
                    <div class="clases-descripci??n">
                        <h5>Etapa 2:</h5>
                        <p>Profundizamos conceptos para romper los esquemas mentales y la l??gica. Flexibilidad mental. Trabajamos la creatividad en equipo. Duraci??n 4 clases.</p>
                    </div>
                    <div class="clases-descripci??n">
                        <h5>Etapa 3:</h5>
                        <p>Entrenamiento extensivo de creatividad. Soltar la imaginaci??n para la creaci??n de historias a partir de la improvisaci??n. Duraci??n 4 clases</p>
                    </div>
                </div>
            </div>
            <div class="div-experiencia">
                <svg xmlns="../public/images/wave (1) .svg" viewBox="0 0 1440 320"><path fill="#22418a" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,154.7C384,160,480,224,576,218.7C672,213,768,139,864,128C960,117,1056,171,1152,197.3C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
                <div class="experiencia-participantes">
                    <h3>Experiencia de los participantes</h3>
                    <div class="modal-feedback">
                        <div class="feedback">
                            <img src="" alt="">
                            <h4>Alex Casas Publicista- Bs As, Argentina</h4>
                            <p>???GymCreativo es una experiencia interesant??sima! 
                                Los ejercicios que propone Santi son muy divertidos, 
                                son muy ??til para literalmente ejercitar un 
                                poco la mente y agilizar la fluidez de ideas.???</p>
                        </div>
                        <div class="feedback">
                            <img src="" alt="">
                            <h4>Silvina Izquierdo Porfesora- Bs As, Argentina</h4>
                            <p>???En GymCreativo encontr?? un espacio para entrenar 
                                mi creatividad y adem??s de disfrutarlo de la mejor 
                                manera (jugando y aprendiendo rodeada de un gran 
                                grupo humano) lidera las cosas positivas de mi 
                                lista de este 2020</p>
                        </div>
                        <div class="feedback">
                            <img src="" alt="">
                            <h4>Mairel Bermudez, Periodista y locutora, Panam??</h4>
                            <p>Ret?? mis habilidades, ejercit?? la mente para quitar 
                                barreras o l??mites por la costumbre de hacer el 
                                camino f??cil.  Gracias al curso, he sentido que 
                                ahora pienso m??s amplio las soluciones, consigo 
                                m??s rutas para crear. Creci?? mi imaginaci??n.</p>
                        </div>
                        <div class="feedback">
                            <img src="" alt="">
                            <h4>Laura Missy, Comediante y escritora, Madrid, Espa??a</h4>
                            <p>"Prob?? una clase de muestra con Santi en el momento del 
                                confinamiento en Espa??a. Me decid?? a hacer uno de 
                                cursos en el mes de Junio y la diferencia horaria no 
                                iba a ser ning??n impedimento (00:00). Eran las dos 
                                horas m??s divertidas de la semana, aprendiendo a crear 
                                y exprimir la mente, adem??s de conocer gente del otro 
                                lado del charco. Santi es un apasionado de la creatividad 
                                y sabe c??mo hacer que juguemos. Que no te lo cuenten,
                                 no tienes nada que perder y mucho por ganar. ??Repetimos?"</p>
                        </div>
                        <div class="feedback">
                            <img src="" alt="">
                            <h4>Juan Francisco Lukac, Ingeniero Civil, Bs As, Argentina</h4>
                            <p>???El primer obst??culo de la creatividad son las propias 
                                barreras internas en que pensamos que una idea es absurda, 
                                irrealizable, etc. A lo largo de los ejercicios del curso 
                                fui descubriendo que la creatividad es romper esas barreras,
                                 y anotar todas las ideas en papel antes de pensar si es
                                  buena o mala. Ninguna idea vuela si le cortamos
                                   las alas antes de nacer."</p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('modal2').style.display='none'; 
            document.getElementById('back-to-top').style.display='initial'; 
            document.getElementById('whatsapp').style.display='initial'">&times;</span>
            <!-- <div class="modal-titulo">
                <h2 class="titulos" style="color: #22418a;">Cursos y talleres</h2>
            </div> -->
            <div class="modal-content-info">
                <div class="modal-content-descripcion">
                    <img class='curso-imagen' src="../public/images/fondocursos.png" alt="">
                    <div>
                        <h2>Mentor??as</h2>
                        <p>Introducci??n a la creatividad con ejercicios para dejar de criticar mis ideas, evitar el NO y encontrar nuevos puntos de vista</p>
                        <p>Duraci??n: 4 a 8 encuentros <br>
                        Online en vivo <br>
                        Personalizado</p>
                        <div class="modal-quiero-inscribirme">
                            <a href="https://wa.me/5491160186557?text=Hola,%20quiero%20inscribirme%20en%20el%20curso%20de%20Mentor??a!!" 
                            target="blanck">??QUIERO INSCRIBIRME!</a>
                        </div>
                    </div>
                </div>
                <div class="clases-programa"><h3>Programa</h3></div>
                <div class="clases">
                    <div class="clases-descripci??n">
                        <h5>Clase 1:</h5>
                        <p>Descripci??n de la clase</p>
                    </div>
                    <div class="clases-descripci??n">
                        <h5>Clase 2:</h5>
                        <p>Descripci??n de la clase</p>
                    </div>
                    <div class="clases-descripci??n">
                        <h5>Clase 3:</h5>
                        <p>Descripci??n de la clase</p>
                    </div>
                    <div class="clases-descripci??n">
                        <h5>Clase 4:</h5>
                        <p>Descripci??n de la clase</p>
                    </div>
                </div>
            </div>
            <div class="div-experiencia">
                <svg xmlns="../public/images/wave (1) .svg" viewBox="0 0 1440 320"><path fill="#22418a" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,154.7C384,160,480,224,576,218.7C672,213,768,139,864,128C960,117,1056,171,1152,197.3C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
                <div class="experiencia-participantes">
                    <h3>Experiencia de los participantes</h3>
                    <div class="modal-feedback">
                        <div class="feedback">
                            <img src="" alt="">
                            <h4>Elina Garc??a Ginebreda, Dise??adora de indumentaria, Bs As.</h4>
                            <p>Me gust?? poder organizar y proyectar mis objetivos, 
                                me aport?? nuevas ideas y gener?? un gran 
                                crecimiento en mi emprendimiento.</p>
                        </div>

                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('modal3').style.display='none'; 
            document.getElementById('back-to-top').style.display='initial'; 
            document.getElementById('whatsapp').style.display='initial'" class="close">&times;</span>
            <!-- <div class="modal-titulo">
                <h2 class="titulos" style="color: #22418a;">Cursos y talleres</h2>
            </div> -->
            <div class="modal-content-info">
                <div class="modal-content-descripcion">
                    <img class='curso-imagen' src="../public/images/fondocursos.png" alt="">
                    <div>
                        <h2>Improvisaci??n Teatral</h2>
                        <p>??Qu?? es la impro? <br> <br>
                            Es un g??nero teatral con la particularidad que no utiliza libreto, por lo tanto los actores crean, act??an y dirigen sus propias historias saltando al vac??o de lo desconocido.
                            </p>
                            <p><strong>Beneficios:</strong> Mejora la rapidez de respuesta, Ayuda a combatir la verg??enza, trabajan las emociones de una manera libre y relajada. Trabajo en equipo. Escucha activa. Adaptaci??n al cambio. Anti estr??s.
                            </p>
                        <p>Duraci??n: 12 clases<br>
                        Online en vivo <br>
                        Cupos limitados</p>
                        <div class="modal-quiero-inscribirme">
                            <a href='https://wa.me/5491160186557?text=Hola,%20quiero%20inscribirme%20en%20el%20curso%20de%20Improvisaci??n%20Teatral' 
                            target="blanck">??QUIERO INSCRIBIRME!</a>
                        </div>
                    </div>
                </div>
                <div class="clases-programa"><h3>Programa</h3></div>
                <div class="clases">
                    <div class="clases-descripci??n">
                        <h5>Clase 1:</h5>
                        <p>Descripci??n de la clase</p>
                    </div>
                    <div class="clases-descripci??n">
                        <h5>Clase 2:</h5>
                        <p>Descripci??n de la clase</p>
                    </div>
                    <div class="clases-descripci??n">
                        <h5>Clase 3:</h5>
                        <p>Descripci??n de la clase</p>
                    </div>
                    <div class="clases-descripci??n">
                        <h5>Clase 4:</h5>
                        <p>Descripci??n de la clase</p>
                    </div>
                </div>
            </div>
            <!-- <div class="div-experiencia">
                <svg xmlns="../public/images/wave (1) .svg" viewBox="0 0 1440 320"><path fill="#22418a" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,154.7C384,160,480,224,576,218.7C672,213,768,139,864,128C960,117,1056,171,1152,197.3C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
                <div class="experiencia-participantes">
                    <h3>Experiencia de los participantes</h3>
                    <div class="modal-feedback">
                        <div class="feedback">
                            <img src="" alt="">
                            <h4>Nombre</h4>
                            <p>Comentarios de la persona</p>
                        </div>
                        <div class="feedback">
                            <img src="" alt="">
                            <h4>Nombre</h4>
                            <p>Comentarios de la persona</p>
                        </div>
                        <div class="feedback">
                            <img src="" alt="">
                            <h4>Nombre</h4>
                            <p>Comentarios de la persona</p>
                        </div>
                    </div>
                </div> 
            </div> -->
        </div>
    </div>

    <div id="modal4" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('modal4').style.display='none'; 
            document.getElementById('back-to-top').style.display='initial'; 
            document.getElementById('whatsapp').style.display='initial'">&times;</span>
            <!-- <div class="modal-titulo">
                <h2 class="titulos" style="color: #22418a;">Cursos y talleres</h2>
            </div> -->
            <div class="modal-content-info">
                <div class="modal-content-descripcion">
                    <img class='curso-imagen' src="../public/images/fondocursos.png" alt="">
                    <div>
                        <h2>Workshop para Emprendedores</h2>
                        <p>En este Workshop vamos a realizar ejercicios especialmente dise??ados para ???encontrar??? nuevas oportunidades de negocio, flexibilidad para poder adaptarnos r??pidamente a los cambios y llevar los emprendimientos al pr??ximo nivel.</p>
                        <p>Duraci??n: 1 clase <br>
                        Online en vivo</p>
                        <div class="modal-quiero-inscribirme">
                            <a href='https://wa.me/5491160186557?text=Hola,%20quiero%20inscribirme%20en%20el%20curso%20de%20"Workshop%20para%20Emprendedores"' 
                            target="blanck">??QUIERO INSCRIBIRME!</a>
                        </div>
                    </div>
                </div>
                <div class="clases-programa"><h3>Programa</h3></div>
                <div class="clases">
                    <div class="clases-descripci??n">
                        <h5>Clase 1:</h5>
                        <p>Descripci??n de la clase</p>
                    </div>
                    <div class="clases-descripci??n">
                        <h5>Clase 2:</h5>
                        <p>Descripci??n de la clase</p>
                    </div>
                    <div class="clases-descripci??n">
                        <h5>Clase 3:</h5>
                        <p>Descripci??n de la clase</p>
                    </div>
                    <div class="clases-descripci??n">
                        <h5>Clase 4:</h5>
                        <p>Descripci??n de la clase</p>
                    </div>
                </div>
            </div>
            <!-- <div class="div-experiencia">
                <svg xmlns="../public/images/wave (1) .svg" viewBox="0 0 1440 320"><path fill="#22418a" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,154.7C384,160,480,224,576,218.7C672,213,768,139,864,128C960,117,1056,171,1152,197.3C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
                <div class="experiencia-participantes">
                    <h3>Experiencia de los participantes</h3>
                    <div class="modal-feedback">
                        <div class="feedback">
                            <img src="" alt="">
                            <h4>Nombre</h4>
                            <p>Comentarios de la persona</p>
                        </div>
                        <div class="feedback">
                            <img src="" alt="">
                            <h4>Nombre</h4>
                            <p>Comentarios de la persona</p>
                        </div>
                        <div class="feedback">
                            <img src="" alt="">
                            <h4>Nombre</h4>
                            <p>Comentarios de la persona</p>
                        </div>
                    </div>
                </div> 
            </div> -->
        </div>
    </div>

    <button onclick="topFunction()" id="back-to-top" title="Go to top"><i class="fas fa-arrow-up"></i><br>Subir</button>
    
    <a href="https://wa.me/5491160186557" target="blanck"><button id="whatsapp" title="Go to top"><span>??CHARLEMOS!</span><span>&nbsp;&nbsp;</span> <i class="fa fa-whatsapp"></i></button></a>

    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script>
        
        var btn1 =getElementById('openmodal1')
        var btn2 =getElementById('openmodal2')
        var btn3 =getElementById('openmodal3')
        var btn4 =getElementById('openmodal4')

        var modal1 =getElementById('modal1')
        var modal2 =getElementById('modal2')
        var modal3 =getElementById('modal3')
        var modal4 =getElementById('modal4')

        var buttons = [btn1,btn2,btn3,btn4]

    </script>
    <script>
		$('.owl-carousel')({
		            loop: true,
		            center: true,
		            items: 8,
		            margin: 0,
		            autoplay: true,
		            dots:true,
		            autoplayTimeout: 4500,
							  checkVisibility: true,
		            responsive: {
		              0: {
		                items: 1
		              },
		              768: {
		                items: 2
		              },
		              1170: {
		                items: 3
		              }
		            }
		        });

    </script>
    
    <script>
        mybutton = document.getElementById("back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
    </script>

</body>
</html>