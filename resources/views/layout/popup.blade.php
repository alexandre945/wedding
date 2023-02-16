<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="popup"class="popup">
        <div class="popup-content m-5 md: m-10">
          <div class="text-center  mt-2 p-2 bg-info  position-absolute rounded">
            <h2>Faltam </h2>
            @include('layout.countdow')
            <p>Para o Casamento  </p>
            <span>de</span>
            <h2>Aleandre & Valdinéia</h2>
            <span>E você é nosso convidado Especial</span>
            <div class="img-fluid w-2 ml-2">
                <img class="w-2" style="width:100px;border-radius:20px;"src="image/amor.jpeg" alt="foto do casal">
            </div>
          </div>
        </div>
    </div>
    <script>
        setTimeout(function(){
        var a = document.getElementById("popup");
        a.style="display:none"
        }, 7000);
    </script>
</body>
</html>