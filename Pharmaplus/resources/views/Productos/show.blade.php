<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ml-8 grid grid-cols-2 ">
                <div class="ml-8">
                    <h1 class="text-2xl">Producto</h1>
                    <h1>Codigo de producto: {{$producto->cod_producto}}</h1>
                    <h1> nombre del producto es: <strong>{{$producto->nombre_producto}}</strong></h1>
                    <h1>Descripcion: {{$producto->descripcion_producto}}</h1>
                    <h2>Precio de Venta: $ {{$producto->precio_producto}}</h2>
                    <h2>Existencia de producto: {{$producto->stock_producto}}</h2>
                </div>
                
                <div class="mt-4">
                    <p><a href="{{route('productos.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded ml-6 mt-2 "> Volver a Productos </a></p><br>
                    <p><a href="{{route('productos.edit', $producto)}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-6 rounded ml-6 mt-4 ">Editar</a></p>

                    <form action="{{route('productos.destroy', $producto)}}" method="POST">
                    @csrf
                    @method('delete')

                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-6 mt-4 mb-3">Eliminar</button>
               
                </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>