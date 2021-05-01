<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg grid grid-cols-2">
            <div class="mt-8">
                <h1 class="ml-6 text-2xl">Pagina de Producto</h1>
                <br>
                <ol>
                @foreach ($product as $producto)
                    <div class="ml-8">
                    <li><a href="{{route('productos.show',$producto->cod_producto)}}">{{$producto->nombre_producto}}</a></li> 
                    </div>
                @endforeach
                </ol>
                <br>
            </div>
            <div class="mt-8 md:grid-cols-2">
                <a href="{{route('productos.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-6 mt-2">Crear Producto</a>
                <div class="mt-8 mb-8">
                    <form action="{{route('productos.index')}}" method="GET" role="search">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-6 mt-2" type="submit">Buscar por Nombre</button>
                        <input  class="rounded mt-4 mb-4" type="text" value="" name="nombreproducto">
                        <a href="{{route('productos.index')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ml-1 mt-2">Recargar pagina</a>
                    </form>
                </div>
                <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-6 mt-2" href="{{route('pdf.generatePDF')}}">Generar PDF</a>
            </div>
            
        </div>
    </div>
</div>
<div class="mb-20 ml-8 mr-8">
    @if (($product->count())>10)
    {{$product->links()}}
    @else
    @endif
</div>



</x-app-layout>