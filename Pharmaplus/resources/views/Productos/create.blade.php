<x-app-layout>
    <div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{route('productos.store')}}" method="POST">

                    @csrf
            
                    <label>
                        Codigo de producto: 
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="codigo" value={{old('codigo')}} >
                        </div>
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
                         <div class="ml-8 mt-3">
                         <input type="text" name="name" value={{old('name')}}> 
                         </div>
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
                        <div class="ml-8 mt-3">
                        <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
                        </div>
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
                        <div class="ml-8 mt-3">
                        <input type="text" name="unidad" placeholder="Unidad" value="Unidad" readonly> 
                        </div>
                    </label>
                    <br>
                    <label>
                        Precio de Venta:
                        <br>
                        <div class="ml-8 mt-3">
                        <input type="text" name="precioVenta" value={{old('precioVenta')}}>
                        </div>
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
                        <div class="ml-8 mt-3">
                        <input type="text" name="precioCompra" value={{old('precioCompra')}}>
                        </div>
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
                        <div class="ml-8 mt-3">
                        <input type="text" name="stock" value={{old('stock')}}>
                        </div>
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
                        <div class="ml-8 mt-3">
                        <input type="text" name="categoria" value="1" readonly placeholder="1 - Farmacia">
                        </div>
                    </label>
                    <br>
                    <div class="ml-8 mt-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8"> Enviar formulario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>