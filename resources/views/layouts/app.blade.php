<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">

    <title>@yield('titulo')</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <p>App CENSO</p>
        </div>
        <div class="enlaces">
            <ul>
                <li>
                    <a href="{{ route('home') }}">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('lista') }}">Lista de personas
                        @if ($notificacion)
                            <div class="notificacion">*</div>
                        @endif
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <main>
        @yield('contenido')
    </main>
</body>
</html>