
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ml-8 px-auto" >
                <div class="ml-8 mt-8 mb-8 grid grid-cols-2 pr-7 pl-7">
                    <div>
                        <h1>Comunicate con nosotros!</h1>
                        <p>El mensaje que escribas en el cuadro de texto lo recibiremos en nuestro correo electronico!</p>
                    <br>
                    </div>
                    <div class="pl-8">
                        <form action="{{route('contactanos.store')}}" method="POST">
                            @csrf
                        
                            <label>Nombre: 
                                <br>
                                <input class="rounded" type="text" name="nombre">
                            </label>
                            <br>
                        
                            @error('nombre')
                                <p><strong>{{$message}}</strong></p>
                            @enderror
                        
                            <label>Correo:
                                <br>
                                <input class="rounded" type="text" name="email">
                            </label>
                            <br>
                        
                            @error('email')
                                <p><strong>{{$message}}</strong></p>
                            @enderror
                        
                            <label>Mensaje: 
                                <br>
                                <textarea class="rounded" name="mensaje" rows="4"></textarea>
                            </label>
                            <br>
                        
                            @error('mensaje')
                                <p><strong>{{$message}}</strong></p>
                            @enderror
                        
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-8 mt-3 mb-8" type="submit">Enviar mensaje</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@if (session('info'))
    <script>alert("{{session('info')}}")</script>
@endif
</x-app-layout>