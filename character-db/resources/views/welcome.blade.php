<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tēlu katalogs</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
    <div class="container">
        <div class="header">
            <div class="navigation">
                <nav>
                    <ul class="nav_buttons">
                        <li class="nav_char"><a href="">Tēli</a></li>
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
        <h1 class="title">Tēlu katalogs</h1> 
        <section>
            <article class="filters" >
                    <h3>Filtri</h3>  
                    <div class="type">
                        <input type="radio" id="all" name="type" value="1">
                        <label for="type">All</label><br>
                        <input type="radio" id="dd" name="type" value="2">
                        <label for="type">D&D</label><br>
                        <input type="radio" id="books" name="type" value="3">
                        <label for="type">Books</label><br>
                    </div>

            </article>
            <article class="product">
            <?php
                //@foreach ($characters as $character) {
                    //<div class="char-info">
                       // {{$character->name}} - {{$character->type}} - {{$character->race}}
                   // </div>
                //}
                //@endforeach
            ?> 
            
            
            <div class="one_char">
                    <div class="cover">
                        <img src="https://animatorisland.b-cdn.net/wp-content/uploads/2017/07/Po_Kung_Fu_Panda-600x639.jpg" alt="tēla attēls">
                    </div>
                    <div class="char_info">
                        <h3><a href="character">Po</a></h3>
                        <p>Autors</p>
                        <div class="tags">
                            <div class="one_tag">Dzīvnieks</div>
                            <div class="one_tag">Kung-Fu</div>
                            <div class="one_tag">Antropomirfisms</div>
                        </div>
                    </div>
                </div>
                <div class="one_char">
                    <div class="cover">
                        <img src="https://animatorisland.b-cdn.net/wp-content/uploads/2017/07/Po_Kung_Fu_Panda-600x639.jpg" alt="tēla attēls">
                    </div>
                    <div class="char_info">
                    <h3><a href="character">Po</a></h3>
                        <p>Autors</p>
                        <div class="tags">
                            <div class="one_tag">Elfs</div>
                        </div>
                    </div>
                </div>
                <div class="one_char">
                    <div class="cover">
                        <img src="https://animatorisland.b-cdn.net/wp-content/uploads/2017/07/Po_Kung_Fu_Panda-600x639.jpg" alt="tēla attēls">
                    </div>
                    <div class="char_info">
                    <h3><a href="character">Po</a></h3>
                        <p>Autors</p>
                        <div class="tags">
                            <div class="one_tag">Elfs</div>
                        </div>
                    </div>
                </div>
                <div class="one_char">
                    <div class="cover">
                        <img src="https://animatorisland.b-cdn.net/wp-content/uploads/2017/07/Po_Kung_Fu_Panda-600x639.jpg" alt="tēla attēls">
                    </div>
                    <div class="char_info">
                    <h3><a href="character">Po</a></h3>
                        <p>Autors</p>
                        <div class="tags">
                            <div class="one_tag">Elfs</div>
                        </div>
                    </div>
                </div>
                <div class="one_char">
                    <div class="cover">
                        <img src="https://animatorisland.b-cdn.net/wp-content/uploads/2017/07/Po_Kung_Fu_Panda-600x639.jpg" alt="tēla attēls">
                    </div>
                    <div class="char_info">
                    <h3><a href="character">Po</a></h3>
                        <p>Autors</p>
                        <div class="tags">
                            <div class="one_tag">Elfs</div>
                        </div>
                    </div>
                </div>
                <div class="one_char">
                    <div class="cover">
                        <img src="https://animatorisland.b-cdn.net/wp-content/uploads/2017/07/Po_Kung_Fu_Panda-600x639.jpg" alt="tēla attēls">
                    </div>
                    <div class="char_info">
                    <h3><a href="character">Po</a></h3>
                        <p>Autors</p>
                        <div class="tags">
                            <div class="one_tag">Elfs</div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        
        <footer>
            <p>Izveidoja <strong>Emīlija Radzeviča</strong> un <strong>Roberta Zvejniece </strong></p>
        </footer>
    </div>
    
    </body>
</html>