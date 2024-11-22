<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="el mejor colegio de toda guatemala">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Fenix</title>

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;0,800;1,600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- estilos -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="icon" href="img/a1.ico">
    <link rel="stylesheet" href="css/page1.css">

</head>
<body>
    <!-- HEADER -->
    <header class="header">
        <div class="logo">
            <figure class="logo__figure">
                <a href="index.php">
                    <img src="img/logo_Golegio Crearte.png" alt=" logo del colegio" title="menu">
                </a>
            </figure>
            <a href="index.php">
                <p class="logo__frase">Colegio Fenix</p>
            </a>
        </div>
        <figure class="header__menu">
            <!--
            <img loading="lazy" src="img/menu_colegio-Crearte.svg" alt="menu" title="menu">-->
        </figure>
    </header>
    <!-- /HEADER -->

    <!-- HERO -->
    <section class="hero">
        <figure class="d-none">
            <img loading="lazy" src="img/colegio_Crearte_primerLogo.png" alt="primer Logo" title="primer logo">
        </figure>
        <figure class="d-none">
            <img loading="lazy" src="img/colegio_Crearte_tercerLogo.png" alt="tercer Logo" title="tercer logo">
        </figure>
        <figure class="bg-img-1">
            <img loading="lazy" src="img/colegio_Crearte_segundoLogo.png" alt="personas estudiando" title="personas estudiando">
        </figure>
        <figure class="bg-img-2">
            <img loading="lazy" src="img/colegio_Crearte_primerLogo.png" alt="personas estudiando" title="personas estudiando">
        </figure>
        <h1 id="infoDisplay1">Escoje Un Grado</h1>
        
        <div class="botones"><!-- 
            <div class="d-flex justify-content-center">
                <a href="https://www.google.com/" class="boton botones__grado">Pre - primaria</a>
            </div>-->
            <!-- Select con opciones -->
            <select id="optionSelect" onchange="updateButtons()">
                <option value="1">Selecionar</option>
                <option value="2">Primaria</option>
                <option value="3">Básico</option>
                <option value="4">Básico Por Madurez</option>
                <option value="5">Bachiller Normal</option>
                <option value="6">Bachiller Por Madurez</option>
            <!-- Agrega más opciones según sea necesario -->
            </select>
            <div id="buttonContainer" class="d-flex" >
                <!-- Los botones se llenarán dinámicamente aquí -->
            </div>
        </div>
        <figure class="hero__img">
            <img loading="lazy" src="img/fenix2.png" alt="personas estudiando" title="personas estudiando">
        </figure>
        <div style="width: 100%">
            <div class="q-x">
                <div class="q-x-text">
                    <h2>Inscripción</h2>
                    <h1 id="infoDisplay3">-----</h1>
                </div>
                <div class="q-x-text">
                    <h2>Mensualidad</h2>
                    <h1 id="infoDisplay2">-----</h1>
                </div>
            </div>
            <!-- 
            <h2 class="aceptamos">Aceptamos VisaCuotas</h2>
            <h2 class="aceptamos">Pagar inscripción</h2>
        </div>
        <div class="botones">
            <a href="https://www.google.com/" class="boton botones__grado">VISA y Mastercard</a>
            <a href="https://www.google.com/" class="boton botones__grado">Deposito</a>-->
        </div>
        <div class="description-block">
            <div class="servicios__card m-auto">
                <p class="servicios__fraseChica text-center">Descripción:</p>
                <ul class="text-white description-list">
                    <li>
                        Es necesario Libros
                    </li>
                    <li>
                        Sin Uniformes
                    </li>
                    <li>
                        100% Online
                    </li>
                </ul>
                <p class="servicios__fraseMedia">Se requiere internet y acceso a: Tablet, teléfono inteligente o computadora. 10 Meses de clases en vivo 100% a distancia en nuestra plataforma, Garantía de satisfacción o devolución del dinero.</p>
            </div>
            <div class="hero__img m-auto">
                <img loading="lazy" src="img/colegio_Crearte_diploma.png" alt="personas estudiando" title="personas estudiando">
            </div>
            <div class="servicios__card m-auto">
                <p class="servicios__fraseChica text-center diploma">Diploma al Finalizar</p>
            </div>
        </div>
        <div class="m-description-block">
            <div class="servicios__card mx-auto">
                <p class="servicios__fraseChica text-center">Descripción:</p>
                <ul class="text-white description-list">
                    <li>
                        Es necesario Libros
                    </li>
                    <li>
                        Sin Uniformes
                    </li>
                    <li>
                        100% Bilingüe
                    </li>
                </ul>
                <p class="servicios__fraseMedia">Se requiere internet y acceso a: Tablet, teléfono inteligente o computadora. 10 Meses de clases en vivo 100% a distancia en nuestra plataforma, Garantía de satisfacción o devolución del dinero.</p>
            </div>
            <div class="servicios__card mx-auto">
                <p class="servicios__fraseChica text-center diploma">Diploma o Certificación al finalizar</p>
            </div>
            <div class="mx-auto">
                <img loading="lazy" src="img/colegio_Crearte_diploma.png" alt="personas estudiando" title="personas estudiando">
            </div>
        </div>
    </section>
    <!-- /HERO -->

    <section class="hero second-hero">
        <div class="w-100">
            <h2 class="especificaciones">ESPECIFICACIONES:</h2>
            <div class="especificaciones-below mx-auto">
                <div class="servicios__card mx-auto">
                    <div class="m-auto">
                        <p class="servicios__fraseChica text-center title">INICIO DE CLASES</p>
                        <p class="servicios__fraseChica text-center subtitle">17 Enero</p>
                        <div class="white-bar mx-auto" style="width: 60%;"></div>
                    </div>
                </div>
                <div class="servicios__card mx-auto">
                    <p class="servicios__fraseChica text-center title">HORARIO</p>
                    <p class="servicios__fraseChica text-center subtitle">7:00 a 13:00 hrs. </p>
                    <p class="white-bar-title">Lunes a Viernes</p>
                    <div class="white-bar mx-auto"></div>
                </div>
                <div class="servicios__card mx-auto">
                    <p class="servicios__fraseChica text-center title">Cursos</p>
                    <div id="infoDisplay4"><p>-----</p></div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero">
        <figure>
            <img loading="lazy" src="img/colegio_Crearte_primerLogo.png" alt="primer Logo" title="primer logo">
        </figure>
        <figure>
            <img loading="lazy" src="img/colegio_Crearte_tercerLogo.png" alt="tercer Logo" title="tercer logo">
        </figure>
        
        <div class="tienes-block">
            <p class="text-center tienes">¿Tienes <br> dudas?</p>
            <div >
            <div class="pulsar mx-auto"  onclick="openPopup()">
                <div class="miDiv"  onclick="openPopup()">
                    <div class="pulsar__texto"  onclick="openPopup()">
                        <div class="telephone-img"  onclick="openPopup()">
                            <img loading="lazy" src="img/page1/telephone.png" alt="personas estudiando" title="personas estudiando">
                        </div>
                        <p class="text-center">Te <br> llamamos</p>
                    </div>
                </div>
            </div>
            </div>

           


<div id="pop_up1" class="popup">
    <span class="close" onclick="closePopup()">&times;</span>
    <form id="formulario" class="form-popup" action="php/guardar.php" method="post" onsubmit="return validarFormulario()">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required pattern="[0-9]+"><br><br> <!-- Utilizamos pattern="[0-9]+" para permitir solo números -->
        <label for="hora">¿A qué hora le podemos llamar?</label>
        <input type="time" id="hora" name="hora" required>
        <select id="ampm" name="ampm">
            <option value="am">a.m.</option>
            <option value="pm">p.m.</option>
        </select><br><br>
        <button type="submit">Enviar</button>
    </form>
</div>
<div id="pop_up2" class="popup2">
    Datos Enviados
</div>

<!-- video youtube y
            <p class="text-center tienes" style="margin-top: 50px;">Conoce nuestro <br> COLEGIO</p>
            <div class="">
                <p class="text-center"> <br> </p>
                <p class="text-center"> <br> </p>
                <div >
                    <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/oviQJSgpKKo?" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <p class="text-center"> <br> </p>
                <p class="text-center"> <br> </p>
                <div >
                    <div class="sketchfab-container" >
                        <div > 
                            
                            <iframe title="Colegio Bilingüe Crearte" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/e4005cdad7b742e1b27769223f82e581/embed"> </iframe>                
                        </div>
                    </div>
                </div>
            </div>/HERO -->
            <p class="text-center tienes" style="margin-top: 50px;">Ventajas</p>
            <div class="icon-item-list d-flex w-100">
                <div class="row w-100">
                    <div class="col-md-2 col-6">
                        <div class="icon-item">
                            <div class="icon-img">
                                <img src="img/page1/item-14.png">
                            </div>
                            <div class="icon-item-text">
                                <div class="icon-item-part">
                                    <p>Clases en vivo</p>
                                    <div class="white-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="icon-item">
                            <div class="icon-img">
                                <img src="img/page1/item-2.png">
                            </div>
                            <div class="icon-item-text">
                                <div class="icon-item-part">
                                    <p>Clases grabadas</p>
                                    <div class="white-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="icon-item">
                            <div class="icon-img">
                                <img src="img/page1/item-3.png">
                            </div>
                            <div class="icon-item-text">
                                <div class="icon-item-part">
                                    <p>Diploma <br>al finalizar el año</p>
                                    <div class="white-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="icon-item">
                            <div class="icon-img">
                                <img src="img/page1/item-4.png">
                            </div>
                            <div class="icon-item-text">
                                <div class="icon-item-part">
                                    <p>Precios bajos</p>
                                    <div class="white-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6" style="padding-bottom: 10px;">
                        <div class="icon-item">
                            <div class="icon-img">
                                <img src="img/page1/item-12.png">
                            </div>
                            <div class="icon-item-text">
                                <div class="icon-item-part">
                                    <p>Se requieren</p>
                                    <p>Libros</p>
                                    <div class="white-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6" style="padding-bottom: 10px;">
                        <div class="icon-item">
                            <div class="icon-img">
                                <img src="img/page1/item-6.png">
                            </div>
                            <div class="icon-item-text">
                                <div class="icon-item-part">
                                    <p>Puedes usar celular, <br>tablet, laptop, compu</p>
                                    <div class="white-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icon-item-list d-flex w-100" style="margin-top: 10px!important;">
                <div class="row w-100">
                    <div class="col-md-2 col-6">
                        <div class="icon-item">
                            <div class="icon-img">
                                <img src="img/page1/item-7.png">
                            </div>
                            <div class="icon-item-text">
                                <div class="icon-item-part">
                                    <p>No cobros <br>escondidos</p>
                                    <div class="white-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="icon-item">
                            <div class="icon-img">
                                <img src="img/page1/item-8.png">
                            </div>
                            <div class="icon-item-text">
                                <div class="icon-item-part">
                                    <p>Se requiere<br>acceso a internet</p>
                                    <div class="white-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="icon-item">
                            <div class="icon-img">
                                <img src="img/page1/item-9.png">
                            </div>
                            <div class="icon-item-text">
                                <div class="icon-item-part">
                                    <p>Sin uniforme</p>
                                    <div class="white-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="icon-item">
                            <div class="icon-img">
                                <img src="img/page1/item-10.png">
                            </div>
                            <div class="icon-item-text">
                                <div class="icon-item-part">
                                    <p>Soporte técnico</p>
                                    <div class="white-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6" style="padding-bottom: 10px;">
                        <div class="icon-item">
                            <div class="icon-img">
                                <img src="img/page1/item-11.png">
                            </div>
                            <div class="icon-item-text">
                                <div class="icon-item-part">
                                    <p>Notas en línea</p>
                                    <div class="white-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icon-item-list d-flex w-100" style="margin-top: 10px!important;">
                <div class="row w-100">
                    <div class="col-md-2 col-6" style="padding-bottom: 0px;">
                    </div>
                    <div class="col-md-2 col-6" style="padding-bottom: 0px;">
                    </div>
                    <div class="col-md-2 col-6" style="padding-bottom: 0px;">
                    </div>
                    <div class="col-md-2 col-6" style="padding-bottom: 0px;">
                    </div>
                </div>
            </div>
        </div>
        <h1 class="text-center">Envía tu papeleria estés donde estés</h1>
        <div class="servicio__figure">
            <img loading="lazy" src="img/page1/transport.png" alt="web" title="web">
        </div>
        <div class="planes__card">
            <p class="planes__fraseMedia">Énfasis en el Idioma Inglés</p>
            <div class="planes__figure">
                <img loading="lazy" src="img/04.png" alt="web" title="web">
            </div>
            <!-- 
            <p class="planes__fraseChica"> aqui va algo que quieras </p>< -->
        </div>
    </section>
    <!-- FOOTER  -->
    <div class="footer">
        <div class="redes">
            <figure class="redes__figure">
                <a href="https://www.facebook.com/profile.php?id=61557970985095&locale=es_LA" target="_blank">
                    <img src="img/Facebook.png" alt="facebook" title="Facebook">
                </a>
            </figure>
            <figure class="redes__figure">
                <a href="https://www.facebook.com/profile.php?id=61557970985095&locale=es_LA" target="_blank">
                    <img src="img/Instagram.png" alt="facebook" title="Facebook">
                </a>
            </figure>
            <figure class="redes__figure">
                <a href="https://www.facebook.com/profile.php?id=61557970985095&locale=es_LA" target="_blank">
                    <img src="img/Twitter.png" alt="facebook" title="Facebook">
                </a>
            </figure>
            <figure class="redes__figure">
                <a href="https://www.facebook.com/profile.php?id=61557970985095&locale=es_LA" target="_blank">
                    <img src="img/Youtube.png" alt="facebook" title="Facebook">
                </a>
            </figure>
            <figure class="redes__figure">
                <a href="https://www.facebook.com/profile.php?id=61557970985095&locale=es_LA" target="_blank">
                    <img src="img/tiktok.png" alt="facebook" title="Facebook">
                </a>
            </figure>
        </div>
        <div class="otros">
            <div class="ubicacion">
                <p class="ubicacion__desfinicion">Ubicacion</p>
                <figure class="ubicacion__ubicacion">
                    <a href="" target="_blank">
                        <img loading="lazy" src="img/Waze.png" alt="waze" title="Waze">
                    </a>
                </figure>
                <figure class="ubicacion__maps">
                    <a href="" target="_blank">
                        <img loading="lazy" src="img/Maps.png" alt="ubicaciÓn" title="ubicación">
                    </a>
                </figure>
            </div>
            <div class="ubicacion">
                <p class="ubicacion__desfinicion">Aceptamos</p>
                <figure class="ubicacion__visa">
                    <img loading="lazy" src="img/Visa.png" alt="waze" title="Waze">
                </figure>
                <figure class="ubicacion__mastercard">
                    <img loading="lazy" src="img/MC.png" alt="ubicacion" title="ubicacion">
                </figure>
            </div>
        </div>
        <div class="contaco">
            <p class="contacto__titulo">Contacto</p>
            <p class="contacto__email">onlinecolegiofenix@gmail.com  5589 0991</p>
        </div>
        <div class="horario">
            <p class="horario__titulo">horario</p>
            <p class="contacto__">Lun a Vier 7:00 a 1:00 </p>
            <p>Atención Online 7:00 a 6:00</p>
        </div>
        <p class="copiright">Copyright © 2021 Colegio Fenix</p>
        <p class="colaboración">Colaboración con ENGIN3D de Argentina e Ing. Jean de Perú</p>
    </div>
    <!-- /FOOTER  -->
    <!-- Importar archivo externo -->
    <script src="javaScript/script.js"></script>
</body>
</html>