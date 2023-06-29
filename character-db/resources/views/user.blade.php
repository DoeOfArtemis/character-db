<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tēlu katalogs</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{ asset('css/user.css') }}" rel="stylesheet">
    </head>
    <body>
    <div class="container">
        <div class="header">
            <div class="navigation">
                <nav>
                    <ul class="nav_buttons">
                        <li class="nav_char"><a href="/">Tēli</a></li>
                        <li><a href="user">Profils</a></li>
                        <li><a href="create">Izveidot tēlu</a></li>
                    </ul>
                 </nav>
            </div>
            <div class="login">
                <ul class="log_buttons">
                    <li><a href="/">Iziet</a></li>
                </ul>
            </div>  
        </div>
        <h1 class="title">Tavs profils</h1> 
        <section>
            <div class="your_char">
                <h5><a href="character">Nosaukums</a></h5>
                <input class="submit" type="button" value="Dzēst">
            </div>
            <div class="your_char">
                <h5><a href="character">Nosaukums</a></h5>
                <input class="submit" type="button" value="Dzēst">
            </div>
            <div class="your_char">
                <h5><a href="character">Nosaukums</a></h5>
                <input class="submit" type="button" value="Dzēst">
            </div>
            <div class="your_char">
                <h5><a href="character">Nosaukums</a></h5>
                <input class="submit" type="button" value="Dzēst">
            </div>
            <div class="your_char">
                <h5><a href="character">Nosaukums</a></h5>
                <input class="submit" type="button" value="Dzēst">
            </div>
            <div class="your_char">
                <h5><a href="character">Nosaukums</a></h5>
                <input class="submit" type="button" value="Dzēst">
            </div>   
        </section>
        
        <footer>
            <p>Izveidoja <strong>Emīlija Radzeviča</strong> un <strong>Roberta Zvejniece </strong></p>
        </footer>
    </div>
    
    </body>
</html>