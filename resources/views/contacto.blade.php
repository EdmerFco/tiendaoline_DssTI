<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>hola mundo</title>


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
            <a class="brea" href="/">Home > </a>Contacto
            </div>
            <hr/>
            <div class="tex-contacto">
            <h2>
            ¡Estamos atentos para responder cualquiera de tus inquietudes!
            </h2>
            </div>

<div class="contacto">
    <center>
            <form>
       <label for="nombre">Nombre:</label>
       <input id="nombre" name="nombre" placeholder="Nombre completo">
       <label for="email">Email:</label>
       <input id="email" name="email" type="email" placeholder="ejemplo@email.com">
       <label for="mensaje">Mensaje:</label>
       <textarea id="mensaje" name="mensaje" placeholder="Danos tu mensaje"></textarea>
       <input id="submit" name="submit" type="submit" value="Enviar">
        </form>
        </center>
        </div>
        <div class="telefono">
        <h1>
        TELEFONO
        </h1>
        <h2>
        441 151 2168
        </h2>
        <h2>
        Recepción: 101
        </h2>
        <h2>

        Comercial: 130
        </h2>
        </div>

        <div class="correo">
        <h1>
        CORREO
        </h1>
        <h2>
        Servicio al cliente:
        </h2>
        <h3>
        servicioalcliente@dssti.com.co
        </h3>
        <h2>
        Comercial:
        </h2>
        <h3>
        gina.correa@dssti.com.co
        </h3>
        <h2>
        Contabilidad:
        </h2>
        <h3>
        paola.rodriguez@dssti.com.co
        </h3>
        <h2>
        Talento Humano:
        </h2>
        <h3>
        talentohumano@dssti.com.co
        </h3> <h2>
        Soporte:
        </h2>
        <h3>
        soporte@dssti.com.co
        </h3>
        </div>
</div>
</div>
        </body>
        <x-footer/>
</html>

