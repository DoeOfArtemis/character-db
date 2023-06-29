<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tēlu katalogs</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{ asset('css/sign-up.css') }}" rel="stylesheet">
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
                    <li><a href="log-in">Ieiet</a></li>
                    <li><a href="sign-up">Pierakstīties</a></li>
                </ul>
            </div>  
        </div>
        <h1 class="title">Reģistrēties</h1> 
        <section>
            <form action="post">
                <div class="whole">
                    <label for="name">Vārds</label><br>
                    <input type="text" id="name" name="name">
                </div>
                <div class="whole">
                    <label for="surname">Uzvārds</label><br>
                    <input type="text" id="surname" name="surname">
                </div>
                <div class="whole">
                    <label for="e-mail">E-pasts</label><br>
                    <input type="e-mail" id="e-mail" name="e-mail">
                </div>
                <div class="whole">
                    <label for="username">Lietotājvārds</label><br>
                    <input type="text" id="username" name="username">
                </div>
                <div class="whole">
                    <label for="password">Parole</label><br>
                    <input type="password" id="password" name="password">
                </div>
                <input class="submit" type="submit" value="Ieiet">
                        
            </form>
            
        </section>
        
        <footer>
            <p>Izveidoja <strong>Emīlija Radzeviča</strong> un <strong>Roberta Zvejniece </strong></p>
        </footer>
    </div>
       
    </body>
</html>
        

    </body>
</html>