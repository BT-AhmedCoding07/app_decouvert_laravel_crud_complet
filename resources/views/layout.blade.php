<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App Laravel Demo</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/a-propos">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contactez-nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clients">Voir la liste des Utilisateurs</a>
                </li>
            
                 @if (Route::has('login'))
             
             
                @auth
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    </li>
                @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Se connecter</a>
                        </li>
    
                    @if (Route::has('register'))
                        <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">S'insrire</a>
                        </li>
                     @endif
                  
                @endauth
            @endif
            </ul>
            @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{session()->get('message')}}
            </div>
            @endif
            @yield('content')
        </div>
    </body>
</html>
 