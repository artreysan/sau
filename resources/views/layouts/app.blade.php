<!DOCTYPE html>
<html lang="{{ str_replace ('_','-', app()->getLocale())}}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sau</title>
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">

</head>

<body>
    <br>
    <div class="container" >
        <br>
        <img width="300" height="40" src="{{URL('/img/logo.png')}}">
    </div>
    <br>
    <header>

            @yield('titulo')

    </header>

            @yield('contenido')
            
    <div class="container">
        <h5><span class="icon-infocircle" aria-hidden="true"></span> NOTA IMPORTANTE: </h5>
        <p>El solicitante deberá ser el director o subdirector del área donde estará ubicado el usuario.</p>
        <br>
    </div>

    <!--Scrip del para el frame del GOB-->
    <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
</body>

</html>

