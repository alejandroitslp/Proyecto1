<x-app-layout>
    @php
    $color = 'indigo';
    @endphp
    <x-alert :color="$color" class="mb-4">
        <x-slot name="title">
            Aprovecha!
        </x-slot>
        Tenemos ofertas unicas en nuestro sitio web
    </x-alert>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ml-8">
                 <h1>Home</h1>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>