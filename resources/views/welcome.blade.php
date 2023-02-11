<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wedding</title>
        @livewireStyles
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Extra+Condensed&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Styles -->
        <style>
             @import url('https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Sofia+Sans+Extra+Condensed&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap'); 
                .material-symbols-outlined {
                 color: red;   
                font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
                }
            body {
                font-family: 'Sofia Sans Extra Condensed', sans-serif;
                font-size: 30px;
                background-image: url('/image/joia.jpg');
                background-size: cover; 
                float: left;
                padding: 2px;
                background-position-x: center;
            
            }
            img {
                opacity: 2.5;
            }
            h2 {
                font-size: 40px;
                
            }
       
        </style>


    </head>
    <body class="antialiased">
      @livewire('wedding');
      @livewireScripts
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
