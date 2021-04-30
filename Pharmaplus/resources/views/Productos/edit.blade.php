<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ml-8 grid grid-cols-2 ">
                <div class="ml-14 mt-8 col-span-2 lg:col-span-1">
                    <h1>Editar Producto </h1>
                <br>
                <form action="{{route('productos.update', $producto)}}" method="POST">

                    @csrf

                    @method('put')

                    <label>
                        Codigo de producto: 
                        <br>
                        <input type="text" name="codigo" value="{{old('codigo',$producto->cod_producto)}}" class="ml-8 mt-3">
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
                        <input class="ml-8 mt-3" type="text" name="name" value="{{old('name',$producto->nombre_producto)}}"> 
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
                        <textarea class="ml-8 mt-3" name="descripcion" rows="5">{{old('descripcion',$producto->descripcion_producto)}}</textarea>
                    </label>

                    @error('descripcion')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>
                    <label>
                        Unidad de Producto:
                        <br>
                        <input class="ml-8 mt-3 mb-8" type="text" name="unidad" placeholder="Unidad" value="Unidad" readonly> 
                    </label>
                    <br>
                    
                </div>
                <div class="mt-8 ml-4 col-span-2 lg:col-span-1">
                    <label>
                        Precio de Venta:
                        <br>
                        <input class="ml-8 mt-3" type="text" name="precioVenta" value="{{old('precioVenta',$producto->precio_producto)}}">
                    </label>

                    @error('precioVenta')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>
                    <label>
                        Precio de compra:
                        <br>
                        <input class="ml-8 mt-3" type="text" name="precioCompra" value="{{old('precioCompra',$producto->precio_compra)}}">
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
                        <input class="ml-8 mt-3" type="text" name="stock" value="{{old('stock',$producto->stock_producto)}}">
                    </label>

                    @error('stock')
                        <br>
                            <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>
                    <label>
                        Categoria: 
                        <br>
                        <input class="ml-8 mt-3" type="text" name="categoria" value="1" readonly placeholder="1 - Farmacia">
                    </label>
                    <br>
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-8 mt-3 mb-8" type="submit"> Actualizar formulario</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>