<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vai ir DB?</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{ asset('css/log-in.css') }}" rel="stylesheet">
    </head>
        <?php 
            if(DB::connection()->getPdo()) {
                echo "Veiksmīgs ir savieojus ar" .DB::connection()->getDatabaseName();
            }

        ?>
    <body>
    
    </body>
</html>