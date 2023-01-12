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

                background-image: url('/image/imageback.jpg');
                background-size: 100vw; 
                background-repeat: no-repeat;
                float: left;
                padding: 2px;
                background-position-x: center;
            }
           .container {
            text-align: center;
            font-size: 28px;
           }
           .flex {
            display: flex;
           
            text-align: center;
          
           }
           .father {
            padding-right: 8px;
            margin-left: 20px;
            margin-top: 15px;
            
           }
           .mother {
            padding-left: 10px;
            margin-right: 10px;
            margin-top: 15px;
           }
           p {
            font-size: 26px;
            margin-top: 1px;
            margin-bottom: 10px;
           }
           h2 {
          
            font-family: 'Monsieur La Doulaise', cursive;
           }
           a {
            margin-top: 20px;
           }
           span {
            margin-bottom: 8px;
           
           }

        </style>


    </head>
    <body class="antialiased">
      @livewire('wedding');
      @livewireScripts
    </body>
</html>
