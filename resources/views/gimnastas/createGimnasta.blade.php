<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Añadir gimnasta</h1>
    <form action="/gimnasta" method="POST">
        @csrf
        <label for="nombre_g">Nombre: </label><br>
        <input type="text" name="nombre_g" id="nombre_g"><br>
        @error('nombre_g')
            <h5>{{$message}}</h5>
        @enderror
        <label for="apellido_g">Apellido: </label><br>
        <input type="text" name="apellido_g" id="apellido_g"><br>
        @error('apellido_g')
            <h5>{{$message}}</h5>
         @enderror
        <label for="fecha_n_g">Fecha de nacimiento: </label><br>
        <input type="text" name="fecha_n_g" id="fecha_n_g"><br><br>
        @error('fecha_n_g')
                <h5>{{$message}}</h5>
        @enderror
        <button type="submit">Enviar</button>
    </form>
</body>
</html>