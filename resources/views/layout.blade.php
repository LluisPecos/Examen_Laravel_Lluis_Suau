<?php
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        @yield('head')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/general.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Web</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/migraciones">Migraciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/seeders">Seeders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/email">Email</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <main class="container py-5">
            @yield('content')
        </main>
        
        <footer>
            <div class="bg-dark d-flex justify-content-center align-items-center" style="height: 50px;">
                <p class="m-0 text-white-50">Lluís Suau Pecos - 2.º DAW - 16/02/2021</p>
            </div>
        </footer>
    </body>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>
