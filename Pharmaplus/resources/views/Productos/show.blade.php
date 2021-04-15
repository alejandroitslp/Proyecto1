@extends('layouts.plantilla')

@section('title',''.$producto->nombre_producto)

@section('content')
<h1>Codigo de producto: {{$producto->cod_producto}}</h1>
<h1><strong> nombre del producto es: </strong>{{$producto->nombre_producto}}</h1>
<h1>Descripcion: {{$producto->descripcion_producto}}</h1>
<h2>Precio de Venta: $ {{$producto->precio_producto}}</h2>
<h2>Existencia de producto: {{$producto->stock_producto}}</h2>
<p><a href="{{route('productos.index')}}"> Volver a Productos </a></p><br>
<p><a href="{{route('productos.edit', $producto)}}">Editar</a></p>

<form action="{{route('productos.destroy', $producto)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
<h2></h2>

@endsection