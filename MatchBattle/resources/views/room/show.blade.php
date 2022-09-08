<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/wait.css')}}">
    <link rel="stylesheet" href="{{url('css/rarity.css')}}">
</head>
<body>
<div class="container-wait">
    <div class="room">
        <div>
            {{$room->code}}
        </div>
    </div>
    {{--        @foreach($room as $sala)--}}
    {{--            {{dd($sala)}}--}}
    {{--        @endforeach--}}
    <div class="players">
{{--        {{$cardsAssign}}--}}
        {{--            {{$id = 0}}--}}
        @php
        $estado = 1;
        $idUser = 1;
        @endphp

        @foreach($name as $user)
            @if($estado == 1 and $idUser == 1)
                <div>
                    <img src="{{url('img/perfil.png')}}" alt="">
                    <p>{{$user->username}}</p>
                </div>

            @php
                $idUser = $user->id;
                $estado = 0;
            @endphp
            @endif
            @if($idUser != $user->id and $estado == 0)
                    <div>
                        <img src="{{url('img/perfil.png')}}" alt="">
                        <p>{{$user->username}}</p>
                    </div>

                    @php
                        $idUser = $user->id;
                    @endphp
                @endif
            {{--            @if($id != $user->user_id && $id != 0 )--}}
            {{--            {{$id = $user->user_id}}--}}
            {{--                @endif--}}
        @endforeach

    </div>
    <div class="con-btn">
            <form action="" method="post">
                <button type="submit" id="btn-sub">Iniciar</button>
            </form>
    </div>
</div>
<script>
    function recargar(){
        window.location.reload()
    }
    setInterval(recargar, 2000)
</script>
</body>
</html>
