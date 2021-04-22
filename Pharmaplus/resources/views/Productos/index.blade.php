<x-app-layout>
    
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1 class="ml-6">Pagina de Producto</h1>
            <br>
            <ol>
             @foreach ($product as $producto)
                <div class="ml-8">
                 <li><a href="{{route('productos.show',$producto->cod_producto)}}">{{$producto->nombre_producto}}</a></li> 
                </div>
             @endforeach
            </ol>
            <br>
            <a href="{{route('productos.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-6 mt-2">Crear Producto</a>
        </div>
    </div>
</div>

{{$product->links()}}
</x-app-layout>