<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DssTI</title>


        <link href="{{asset ('static/css/styles.css')}}" rel="stylesheet">
        <link href="{{asset ('static/css/font.css')}}" rel="stylesheet">

    </head>
        <body>
        <div class="contenedor">
            <div class="antialiased">
            <x-head>
            </x-head>
            <div class="contenido">
            <div class="breadcrumb">
            <a class="brea" href="/">Home > </a>Nosotros
            <hr/>
            </div>

            <div class="nosotros">
            <h1 class="titulos">
            ¿Por que trabajar con nosotros?
            </h1>
            <h2 class="lorem">El desarrollo de proyectos que aporten a la continuidad del
                negocio es uno de nuestros objetivos más importantes, desarrollando e
                implementando proyectos de alta tecnología, siempre con expertos altamente
                certificados por los fabricantes de tecnología más importantes de la región.
                Además la madurez profesional del equipo de trabajo de
                 DssTI, abre un mundo de posibilidades para la planificación de tus proyectos. </h2>
            </div>
            <div class="img-nosotros">
            <ul>
                <li><img src="https://www.sanmateo.edu.co/web-san-mateo-new/img/desarrollo1.jpg" alt=""></li>
                <li><img src="https://inlogiq.com/wp-content/uploads/2017/01/Atlassian-2016-%E2%80%93-INFORME-DE-LAS-TENDENCIAS-DEL-DESARROLLO-DE-SOFTWARE.jpg" alt=""></li>
                <li><img src="https://www.software-mantenimiento.com/wp-content/uploads/2021/01/la-diferencia-entre-el-desarrollo-de-software-3.jpg" alt=""></li>
                <li><img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201805/IT_development_data.jpeg?Xe3LELipBq0B0J_QraXuIOB4qTZUE0eO" alt=""></li>
            </ul>
            </div>

            <div class="empresa">
                <div class="somos">
                <h1 class="titulos">
               ¿QUIEN SOMOS?
                </h1>
                 <h2 class="lorem" >
                    Fundada por dos alumnos de la Universidad Tecnológica
                    de San Juna Del Rio, aprovechando sus estudios recientes
                    y sus ganas de emprender se inicia con un sitio web que le
                    permite dar a conocer su trabajo ante las empresas pequeñas
                    y personas para poco a poco ganar clientes.</h2>
                     </div>
                     <div class="mision">
                        <h1 class="titulos">
                            MISION
                         </h1>
                         <h2 class="lorem">
                         Nuestro compromiso es lograr resultados que incrementen la
                         productividad de nuestros clientes mediante soluciones de
                         consultoría TI, a través del análisis, desarrollo e implementación
                         de sistemas y modelos de negocios apoyados con la mejor tecnología.
                         </h2>
                     </div>

                     <div class="vicion">
                        <h1 class="titulos">
                            VISION
                         </h1>
                         <h2 class="lorem">
                         A corto y mediano plazo, extender nuestras actividades y ser
                         reconocidos unos de los mejores desarrolladores de Tecnologías de
                         Información para empresas y usuarios como tal.
                         A largo plazo, tener una presencia activa en todo el país

                         </h2>
                     </div>

                     <div class="valores">
                        <h1 class="titulos">
                            VALORES
                         </h1>
                         <h2 class="lorem">
                         Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                     Minus cumque eveniet molestias officia voluptas adipisci ipsa
                     ullam, hic sapiente atque, consequatur inventore aperiam nemo
                     dolorum ex nihil necessitatibus quisquam blanditiis.
                         </h2>
                     </div>
            </div>

            <div class="equipo">
            <div class="soporte">
             <img class="soporte" src="https://cdn.icon-icons.com/icons2/2367/PNG/512/user_icon_143482.png" alt=""><BR/>
             <h1 class="h1">EDMER  </h1>
         </div>
         <div class="soporte">
             <img class="soporte" src="https://cdn.icon-icons.com/icons2/2367/PNG/512/user_icon_143482.png" alt=""><BR/>
             <h1 class="h1">JAVIER </h1>
         </div>
         <div class="soporte">
             <img class="soporte" src="https://cdn.icon-icons.com/icons2/2367/PNG/512/user_icon_143482.png" alt=""><BR/>
             <h1 class="h1">EDMER </h1>
         </div>
         <div class="soporte">
             <img class="soporte" src="https://cdn.icon-icons.com/icons2/2367/PNG/512/user_icon_143482.png" alt=""><BR/>
             <h1 class="h1">JAVIER </h1>
         </div>
            </div>
</div>
        </body>
        <x-footer/>
        </div>
</html>

