<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tēlu katalogs</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <link href="{{ asset('css/character.css') }}" rel="stylesheet">
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
            <<div class="login">
                <ul class="log_buttons">
                    <li><a href="log-in">Ieiet</a></li>
                    <li><a href="sign-up">Pierakstīties</a></li>
                </ul>
            </div>  
        </div>
        <h1 class="title">Po</h1> 
        <section>
            <div class="img">
                <img src="https://animatorisland.b-cdn.net/wp-content/uploads/2017/07/Po_Kung_Fu_Panda-600x639.jpg" alt="">
            </div>
            <div class="info">
                <div class="one">
                    <p class="subtitle"><strong>Autors:</strong></p> 
                    <p>Cilvēks</p>
                 </div>
                <div class="one">
                   <p class="subtitle"><strong>Tips:</strong></p> 
                   <p>D&D</p>
                </div>
                <div class="one">
                    <p class="subtitle"><strong>Rase:</strong></p>
                    <p>Panda</p>
                </div>
                <div class="one">
                    <p class="subtitle"><strong>Vecums:</strong></p>
                    <p>10 gadi</p>
                </div>
                <div class="none">
                    <p class="subtitle"><strong>Apraksts:</strong></p>
                    <p class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, amet nisi incidunt ratione ex dignissimos quibusdam culpa dolor neque nemo esse, sint odit, laudantium voluptatum. Earum magnam ducimus ipsam ipsum!</p>
                </div>
                <div class="tags one">
                    <div class="one_tag">Dzīvnieks</div>
                    <div class="one_tag">Kung-Fu</div>
                    <div class="one_tag">Antropomirfisms</div>
                </div>
            </div>  
        </section>
        
        <footer>
            <p>Izveidoja <strong>Emīlija Radzeviča</strong> un <strong>Roberta Zvejniece </strong></p>
        </footer>
    </div>
    
    </body>
</html>