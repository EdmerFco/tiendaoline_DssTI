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
                <a class="brea" href="/">Home > </a>Blog
                <hr/>
            </div>

            <div class="blog">
                <div class="img-produc" >
                <img class="img-tecla"src="{{asset ('https://www.inqrmenu.com/wp-content/uploads/2020/05/top.png')}}" alt="">
                </div>
                <h1> Contactless en restaurantes</h1>
                <div class="p">
                    <p>
                    El distanciamiento social ha llevado al sector a buscar nuevas formas de cuidar de sus clientes y empleados, cuando pueden abrir al público. Muchos locales usan códigos QR para escanear menús,
                     reservaciones y pedidos.
                     El reto: tomar ventaja de los nuevos datos digitales generados.
                    </p>
                </div>

                <a href="/" class="btn btn-primary"> Leer Mas</a>
            </div>
            <div class="blog">
                <div class="img-produc" >
                <img class="img-tecla"src="{{asset ('https://itmastersmag.com/wp-content/uploads/2018/04/shutterstock_400246663.jpg')}}" alt="">
                </div>
                <h1>Banca digital</h1>
                <div class="p">
                    <p>
                    Las circunstancias han llevado a los bancos a acelerar su estrategia
                    de DX para poder seguir atendiendo a los clientes y
                    optimizar su experiencia sin que sea necesario salir de casa.
                    El reto: incrementar la seguridad cibernética.La banca digital es el resultado de
                    la suma de la banca tradicional e Internet. Así es capaz de ofrecer los mismos
                    servicios bancarios de siempre pero a través de una página web o aplicación móvil.
                    </p>
                </div>
                <a href="/" class="btn-blog btn-primary"> Leer Mas</a>
            </div>
            <div class="blog">
                <div class="img-produc" >
                <img class="img-tecla"src="{{asset ('http://www.us.es/sites/default/files/noticia/Salud%20Inteligencia%20artificial_0.jpg')}}" alt="">
                </div>
                <h1> Nuestra salud apoyada en Inteligencia Artificial (IA)</h1>
                <div class="p">
                    <p>
                    En los últimos meses hemos visto más tecnologías encaminadas a
                    luchar contra los contagios: sistemas de análisis de imágenes para un diagnóstico precoz y soluciones de detección de aglomeraciones son dos ejemplos puntuales que emplean IA.
                    El reto: garantizar alta disponibilidad para que esto se traduzca en vidas salvadas.
                    </p>
                </div>
                <a href="/" class="btn btn-primary">Leer Mas</a>
            </div>
            </div>
</div>
        </body>
        <x-footer/>
</html>

