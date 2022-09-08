<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/wait.css')}}">
</head>
<body>
<div class="container-wait" id="view-wait">
    <div class="room">
        <div>
            {{$room->code}}
        </div>
    </div>
    <div class="players">
        @php
        $estado = 0;
        $id = 0;
        @endphp
        @foreach($name as $user)
            @if($id == 0 && $estado == 0)
                <div>
                    <img src="{{url('img/perfil.png')}}" alt="">
                    <p>{{$user->username}}</p>
                </div>
            @php
                $estado = 1;
                $id = $user->id;
            @endphp
            @endif
                @if($id != $user->id)
                    <div>
                        <img src="{{url('img/perfil.png')}}" alt="">
                        <p>{{$user->username}}</p>
                    </div>
                    @php
                        $id = $user->id
                    @endphp
                @endif
        @endforeach
    </div>
{{--    <div class="con-btn">--}}
{{--        <p>Tus cartas</p>--}}
{{--            @foreach($cards as $card)--}}
{{--                <div class="cards">--}}
{{--                    @include('layouts.components.card')--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--    </div>--}}
</div>
<script>
    function recargar(){
        window.location.reload()
    }

    setInterval(recargar,3000)
</script>
</body>
</html>
