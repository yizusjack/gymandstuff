<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gimnastas</h1>
    <ul>
        @foreach ($gimnastas as $gim)
            <li>{{$gim->id}} - {{$gim->nombre_g}}</li>
        @endforeach
    </ul>
</body>
</html>