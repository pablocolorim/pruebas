<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Colorantes Mariposa</title>
</head>
<body>
<div class="container mx-auto" >
    <div>
        <img src="{{asset('img/mariposa.png')}}" alt="" width="200" height="200">
    </div>
    <div class="grid grid-cols-12 lg:grid-cols-1">
        <div class="col-span-12 bg-black ">
            @foreach($modulos as $modulo)
                    <button class="bg-center bg-{{$modulo->color}} hover:bg-{{$modulo->color}} text-white font-bold py-2 px-4 border-b-4 border-{{$modulo->color}} hover:border-{{$modulo->color}} rounded">
        {{$modulo->nombre}}
                    </button>
            @endforeach
                <button class="bg-center bg-pink-800 hover:bg-pink-800 text-white font-bold py-2 px-4 border-b-4 border-bg-pink-800 hover:border-bg-pink-800 rounded">
                    Salir
                </button>
        </div>
    </div>
    <div>
    </div>
</div>
</body>
</html>
