<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tēlu katalogs</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{ asset('css/create.css') }}" rel="stylesheet">
    </head>

    <body>
    <div class="container">
        <div class="header">
            <div class="navigation">
                <nav>
                    <ul class="nav_buttons">
                        <li class="nav_char"><a href="welcome">Tēli</a></li>
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
        <h1 class="title">Jauns tēls</h1> 
        <section>
            <form action="">
                <div class="whole">
                    <input type="radio" id="dd" name="type" value="2">
                    <label for="type">D&D</label><br>
                    <input type="radio" id="books" name="type" value="3">
                    <label for="type">Books</label><br>
                </div>
                <div class="whole">
                    <label for="name">Vārds</label><br>
                    <input type="text" id="name" name="name">
                </div>
                <div class="whole">
                    <label for="race">Rase</label><br>
                    <input type="text" id="race" name="race">
                </div>
                <div class="whole">
                    <label for="age">Vecums</label><br>
                    <input type="text" id="age" name="age">
                </div>
                <div class="whole">
                    <label for="img">Attēls</label><br>
                    <input class="img" id="img" type="file" accept=".jpeg, .png">
                </div>
                <div class="whole">
                    <label for="descrption">Apraksts</label><br>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Vieta tekstam"></textarea>
                </div>
                <input class="submit" type="submit" value="Saglabāt">         
            </form>   
        </section>
        <footer>
            <p>Izveidoja <strong>Emīlija Radzeviča</strong> un <strong>Roberta Zvejniece </strong></p>
        </footer>
    </div>
    </body>
</html>