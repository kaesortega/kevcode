<?php 

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollador y diseñador web | Kevin Ortega</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/windowEmerge.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <!-- ICONS -->
    <link rel="stylesheet" href="./icons/style.css">
</head>
<body>
    <div id="secundario"></div>
    <main id="principal">
        <div id="home"></div>
        <div class="container-nav">
            <nav class="nav-bar">
                <div class="brand">
                    <!-- LOGO -->
                    <img src="imgs/logo.svg" alt="">
                </div>
                
                <!-- Menu de Navegacion -->
                <ul class="menu-des">
                    <li><a href="index.php#home">Home</a></li>
                    <li><a href="index.php#acercaDeMi">Acerca de mi</a></li>
                    <li><a href="index.php#servicios">Servicios</a></li>
                    <li><a class="desplegar-btn" href="#">Portafolio</a></li>
                    <li><a href="index.php#contacto">Contacto</a></li>
                </ul>

                <div class="hamburguerMenu">
                    <a id="des"><span class="icon-th-menu"></span></a>
                </div>

                <!-- Boton para enviar correo -->
                <div class="btn-email">
                    <a href="mailto:kaesortega@gmail.com"><span class="icon-envelope"></span></a>
                </div>
            </div>
        </nav>
        <div class="banner">
            <div class="redes">
                <a href="#"><span class="icon-instagram"></span></a>
                <a href="#"><span class="icon-facebook"></span></a>
            </div>
            <div class="presentacion">
                <div>
                    <h2 class="nombre">¡Soy Kevin Ortega! </h2>
                    <h2 class="profesion">Desarrollador y diseñador web</h2>
                    <p class="descripcion">hago la pagina web de tus sueños realidad</p>
                    <button class="desplegar-btn">Portafolio</button>
                </div>
            </div>
        </div>
        <div id="servicios" style="height: 10px;"></div>
        <section class="one">
            <div class="left-col">
                <h2><span class="thin-letter"> Soluciones innovadoras para impulsar</span> sus proyectos creativos</h2>
                <div class="line-l-i"></div>
                <div class="line-c-i"></div>
                <div class="servicios">
                    <div>
                        <span class="icon-laptop"></span><p>Diseño web</p>
                    </div>
                    <div>
                        <span class="icon-file-code-o"></span><p>Desarrollo web</p>
                    </div>
                    <div>
                        <span class="icon-database"></span><p>Desarrollo de aplicaciones web</p>
                    </div>
                </div>
                <button class="desplegar-btn">Mi portafolio</button>
            </div>
            <div class="right-col">
                <div class="container-img-one">
                    <img src="./imgs/proceso.JPG" alt="">
                </div>
                <div class="fondo-color">

                </div>
            </div>
        </section>
        <div id="acercaDeMi" style="height: 10px;"></div>
        <section class="two">
            <div class="container-title">
                <h2>Mi proceso de trabajo</h2>
                <div class="container-line">
                    <div class="line-l"></div>
                    <div class="line-c"></div>
                </div>
            </div>

            <p>Mi proceso de trabajo consta de 4 partes:  diseño, discusión del diseño, desarrollo web y deployment</p>
            <div class="container-items">
                <div class="grow">
                    <div class="center">
                        <span class="icon-laptop"></span>
                        <p>Diseño web</p>
                    </div>
                </div>
                <div class="grow">
                    <div class="center">
                        <span class="icon-paste"></span>
                        <p>Discusion del diseño</p>
                    </div>
                </div>
                <div class="grow">
                    <div class="center">
                        <span class="icon-file-code-o"></span>
                        <p>Desarrollo web</p>
                    </div>
                </div>
                <div class="grow">
                    <div class="center">
                        <span class="icon-clipboard"></span>
                        <p>Deployment</p>
                    </div>
                </div>
                <div class="grow">
                    <div class="center">
                        <span class="icon-user-group"></span>
                        <p>Soporte</p>
                    </div>
                </div>
            </div>
        </section>
        <div id="contacto"></div>
        <section class="three" id="responseServeMsg">
            <div class="container-title title-2">
                <h2>Ponte en contacto</h2>
                <div class="container-line">
                    <div class="line-l"></div>
                    <div class="line-c"></div>
                </div>
            </div>

            <?php 
                if(isset($_SESSION['respuestaB'])){
                    echo "<p>".$_SESSION['respuestaB']."</p>";
                    unset($_SESSION['respuestaB']);
                }
                if(isset($_SESSION['respuestaM'])){
                    echo "<p>".$_SESSION['respuestaM']."</p>";
                    unset($_SESSION['respuestaM']);
                }
            
            ?>
            <!-- <p>En un plazo de maximo 48 horas tendras respuesta de mi parte</p> -->


            <form action="./scripts/main.php" method="POST">
                <div>
                    <label for="">Nombre</label><input type="text" name="nombre">
                </div>
                <div>
                    <label for="">Apellido paterno</label><input type="text" name="apellidoP">
                </div>
                <div>
                    <label for="">Apellido materno</label><input type="text" name="apellidoM">
                </div>
                <div>
                    <label for="">Correo</label><input type="email" name="correo">
                </div>
                <div>
                    <label for="">Telefono</label><input type="tel" name="telefono">
                </div>
                <div>
                    <label for="">Pais</label><input type="text" name="pais">
                </div>
                <div>
                    <label for="">Empresa</label><input type="text" name="empresa">
                </div>
                <div class="textarea">
                    <label for="">Escribe tu consulta</label><textarea name="consulta" maxlength="1500"></textarea>
                </div>
                <div class="cont-inp-submit">
                    <input type="submit" value="Enviar" class="inp-submit">
                </div>
            </form>
        </section>
        
        <footer>

        </footer>
    </main>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
    <script src="scripts/jquery-3.5.1.js"></script>
    <script>
            $("#des").click(function(){
                var menu = $(".menu-des");
                menu.toggle("slow");
                
            })
    </script>
    
    <script src="./scripts/WindowEmerge.js"></script>
    <!-- <script src="/scripts/jquery-3.5.1.js"></script> -->
    <script src="./scripts/main.js"></script>
    <script src="./scripts/Card.js"></script>
        
</body>
</html>