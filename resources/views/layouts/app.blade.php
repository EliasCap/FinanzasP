<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite([
        'resources/css/app.scss',
        'resources/js/app.js',
    ])

</head>
<body class="font-sans antialiased">
    
    <div id="app">
        <nav class="navbar navbar-expand-md sticky-top navbar-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand">
                    Inicio
                </a>
            </div>
        </nav>
    </div>
    @yield('content')
</body>
</html>
