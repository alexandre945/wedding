<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <title>Love Store</title>
    @livewireStyles
    <style>
           body {
            font-family: 'Dancing Script', cursiva;
        }
            .container {
        text-align: center;
        margin: 10px;
    }
    .image {
        padding: 5px, 8px;
    }
    span {
        font-size: 23px;
    }
    </style>
</head>
<body>
    @livewire('lovestore');
    @livewireScripts
</body>
</html>