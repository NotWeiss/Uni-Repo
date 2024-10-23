<!DOCTYPE html>
<html lang="en">

<head>

    <!--METADATA-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Formulario de Eventos</title>

    <!--STYLES-->
    <link href="{{ asset('css/pico.conditional.min.css') }}" rel="stylesheet">
    <link href = "{{ asset('css/style.css') }}" rel = "stylesheet">

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" 
        rel="stylesheet">

</head>
<body>

    <div class="background"></div>

    <div class="content">

        @yield('content')

        <footer>

            <p>© {{ now()->format('Y') }} e-Polls. All rights reserved.</p>
            
        </footer>
        
    </div>

</body>

</html>