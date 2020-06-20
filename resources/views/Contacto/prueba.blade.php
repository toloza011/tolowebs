<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 Hola, haz recibido un mensaje de: <b>{{$request->nombre}}</b>
<p>Nombre: <b>{{$request->nombre}}</b></p>
<p>Correo: <b>{{$request->correo}}</b></p>
<p>Numero: <b>{{$request->numero}}</b></p>
<p>Mensaje: <b>{{$request->mensaje}}</b></p>
<footer>
    <p style="margin-top: 50px;"><b>ToloWebs 2020</b></p>
</footer>
</body>
</html>