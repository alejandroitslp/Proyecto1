<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <h1>Contenido de medicamentos Pharmaplus</h1>
        <ol>
        @foreach ($productos as $producto)
            <li><p> Nombre: {{ $producto->nombre_producto }} </p>
            <p> Descripcion: {{ $producto->descripcion_producto }} </p>
            <p> Precio al publico: {{$producto->precio_producto}} </p>
            <p> Stock: {{$producto->stock_producto}}</p></li>
        @endforeach
        </ol>
    </body>
</html>