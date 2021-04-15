@extends('layouts.plantilla')

@section('title','Editar Producto')

@section('content')
<h1>Pagina para editar Producto</h1>
    <form action="{{route('productos.update', $producto)}}" method="POST">

        @csrf

        @method('put')

        <label>
            Codigo de producto: 
            <br>
            <input type="text" name="codigo" value="{{old('codigo',$producto->cod_producto)}}">
        </label>

        @error('codigo')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
             Nombre:
             <br>
             <input type="text" name="name" value="{{old('name',$producto->nombre_producto)}}"> 
        </label>

        @error('name')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripcion:
            <br> 
            <textarea name="descripcion" rows="5">{{old('descripcion',$producto->descripcion_producto)}}</textarea>
        </label>

        @error('descripcion')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Unidad de Producto:
            <input type="text" name="unidad" placeholder="Unidad" value="Unidad" readonly> 
        </label>
        <br>
        <label>
            Precio de Venta:
            <br>
            <input type="text" name="precioVenta" value="{{old('precioVenta',$producto->precio_producto)}}">
        </label>

        @error('precioVenta')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Precio de compra:
            <input type="text" name="precioCompra" value="{{old('precioCompra',$producto->precio_compra)}}">
        </label>

        @error('precioCompra')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Stock: 
            <br>
            <input type="text" name="stock" value="{{old('stock',$producto->stock_producto)}}">
        </label>

        @error('stock')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoria: 
            <input type="text" name="categoria" value="1" readonly placeholder="1 - Farmacia">
        </label>
        <br>
        <button type="submit"> Actualizar formulario</button>
    </form>
    
@endsection