@extends('layouts.plantilla')

@section('title','Home')

@section('content')
<h1>Pagina del Create</h1>
    <form action="{{route('productos.store')}}" method="POST">

        @csrf

        <label>
            Codigo de producto: 
            <br>
            <input type="text" name="codigo" value={{old('codigo')}}>
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
             <input type="text" name="name" value={{old('name')}}> 
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
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
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
            <input type="text" name="precioVenta" value={{old('precioVenta')}}>
        </label>

        @error('precioVenta')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Precio de compra:
            <input type="text" name="precioCompra" value={{old('precioCompra')}}>
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
            <input type="text" name="stock" value={{old('stock')}}>
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
        <button type="submit"> Enviar formulario</button>
    </form>
    
@endsection