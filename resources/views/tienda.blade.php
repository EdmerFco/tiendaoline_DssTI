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
                <a class="brea" href="/">Home > </a>tienda
                <hr/>
            </div>

            <div class="tienda">
                <div class="img-produc" >
                <img class="img-tecla"src="{{asset ('https://thotcomputacion.com.uy/wp-content/uploads/2019/02/9603842product_4_20180213180228_5a82b7b4d8c6b_ae704bf4517d4f74a20a4047747db72f.png')}}" alt="">
                </div>
                <a href="/" class="btn btn-primary"> Teclados y Mauses</a>
            </div>
            <div class="tienda">
                <div class="img-produc" >
                <img class="img-tecla"src="{{asset ('static/imagen/disco-ssd.png')}}" alt="">
                </div>
                <a href="/" class="btn btn-primary"> Memorias USB y SSD</a>
            </div>
            <div class="tienda">
                <div class="img-produc" >
                <img class="img-tecla"src="{{asset ('static/imagen/Accesorios3.png')}}" alt="">
                </div>
                <a href="/" class="btn btn-primary">Acesorios</a>
            </div>
            <div class="tienda">
                <div class="img-produc" >
                <img class="img-tecla"src="{{asset ('static/imagen/2.png')}}" alt="">
                </div>
                <a href="/" class="btn btn-primary"> Gamer</a>
            </div>

            <div class="tienda">
                <div class="img-produc" >
                <img class="img-tecla"src="{{asset ('https://resource.logitechg.com/content/dam/gaming/en/products/g560/g560-gallery-1.png')}}" alt="">
                </div>
                <a href="/" class="btn btn-primary"> Bocinas</a>
            </div>
            <div class="tienda">
                <div class="img-produc" >
                <img class="img-tecla"src="{{asset ('https://lh3.googleusercontent.com/proxy/QTFUs1yKR81zqPF3D4U4SZ18VEHPbsjCnaqz3sRcsqbgidG49mrXjSb80fP35VAodkkJGKyh4fV3C-i0uhGbS3Q4PspXZeofZh1z3Z2SlYvgCpCQb6xphDfPRCtgAJpZAg')}}" alt="">
                </div>
                <a href="/" class="btn btn-primary"> Laptop</a>
            </div>
            <div class="tienda">
                <div class="img-produc" >
                <img class="img-tecla"src="{{asset ('https://cdn.goconqr.com/uploads/media/image/11912759/617084a9-c606-44a5-b83a-26d5583991b9.png')}}" alt="">
                </div>
                <a href="/" class="btn btn-primary">PC</a>
            </div>
            <div class="tienda">
                <div class="img-produc" >
                <img class="img-tecla"src="{{asset ('https://i.pinimg.com/originals/a7/f3/83/a7f3839fa6fc1b2bac1422fb5c17d8d8.png')}}" alt="">
                </div>
                <a href="/" class="btn btn-primary"> Electronicos</a>
            </div>
</div>
</div>
        </body>
        <x-footer/>
</html>

