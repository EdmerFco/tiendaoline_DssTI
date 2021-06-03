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
            <x-head/>
            <div class="contenido">
            <div class="breadcrumb">
            <a class="brea" href="/">Home > </a>soporte
            <hr/>
            </div>
            <div class="DssTY">
         <div class="soporte">
             <img class="soporte" src="https://image.flaticon.com/icons/png/128/3654/3654171.png" alt=""><BR/>
             <h1 class="h1">Reparaciones </h1>
         </div>

         <div class="soporte">
             <img class="soporte" src="https://image.flaticon.com/icons/png/128/3654/3654171.png" alt="">
             <h1 class="h1">Actulizaciones  </h1>
         </div>
         <div class="soporte">
             <img class="soporte" src="https://image.flaticon.com/icons/png/128/3654/3654171.png" alt="">
             <h1 class="h1">Mantenimiento  </h1>
         </div>
         </div>
         <div class="DssTY">
         <div class="soporte">
             <img class="soporte" src="https://image.flaticon.com/icons/png/128/3654/3654171.png" alt="">
             <h1 class="h1"> programas </h1>
         </div>
         <div class="soporte">
             <img class="soporte" src="https://image.flaticon.com/icons/png/128/3654/3654171.png" alt="">
             <h1 class="h1">Consultoria TI </h1>
         </div>
         <div class="soporte">
             <img class="soporte" src="https://image.flaticon.com/icons/png/128/3654/3654171.png" alt="">
             <h1 class="h1">soporte </h1>
         </div>
</div>
</div>
</div>
        </body>
        <x-footer/>
</html>
