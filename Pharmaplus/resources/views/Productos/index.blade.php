@extends('layouts.plantilla')

@section('title','Index')

@section('content')
<h1>Pagina de Producto</h1>
<a href="{{route('productos.create')}}">Crear Producto</a>
<ol>
    @foreach ($product as $producto)

       <li><a href="{{route('productos.show',$producto->cod_producto)}}">{{$producto->nombre_producto}}</a></li> 
        
    @endforeach
</ol>
{{$product->links()}}
@endsection