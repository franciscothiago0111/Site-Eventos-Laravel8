    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Laravel</title>

            
            <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet"> 


            <link rel="stylesheet" href="/css/styles.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <script src="/js/scripts.js"></script>

        
        </header>
        <body>
        <header>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">             
        
            <div class="collapse navbar-collapse" id="navbarNav">

            <a href="#"> <img src="/img/hdcevents_logo.svg" alt="HDC Events"></a>
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/events/create">Criar Evento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Eventos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Entrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cadastrar</a>
            </li>


        
            </ul>
        </div>
        </nav>
        </header>


        <h1>BODY DA APLICAÇÃO</h1>
        @yield('content')

        <footer>
            HDC Events  &copy; 2020
        </footer>
        </body>
    
    </html>