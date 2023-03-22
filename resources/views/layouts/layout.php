<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset(css/main.css) }}">
</head>
<body>
    <head>
        <nav class="main-nav">
            <a href="">
                <img src="{{ asset('imagini/logo.png') }}" alt="logo">
            </a>
            <nav class="links">
            <a href="#">Despre</a>
            <a href="#">Produse metodice</a>
            <a href="#">Exemple de lucrari</a>
        </nav>
        </nav>

        <div class="home-content">
            <h1>Platforma de promovare</h1>
            <p>Centrul Republican</p>
            <div class="buttons">
                <a href="#" class="register">Inscriet-te</a>
                <a href="#" class="login">Autentificare</a>
            </div>
        </div>

    </head>
    
</body>
</html>