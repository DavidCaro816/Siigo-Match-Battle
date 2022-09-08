
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/rarity.css')}}">
    <link rel="stylesheet" href="{{url('css/show.css')}}">
</head>
<body>
<div class="global_container">
@include('layouts.components.sidebar')
<div class="container-wait">
    <div class="players">
        @foreach($cards as $card)
            <div class="cards">
                @include('layouts.components.card')
            </div>
        @endforeach
    </div>

</div>
</div>
</body>
</html>



