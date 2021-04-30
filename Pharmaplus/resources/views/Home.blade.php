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
    <div class="py-12 bg-home-pharmaplus bg-fixed h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ml-8 bg-opacity-60 grid grid-cols-2" >
                <div class="pl-8 pr-8 mb-8 mt-8">
                    <h1 class="font-serif text-2xl" >Sabes como se comporta el Coronavirus? </h1>
                    <br>
                    <p>El virus inicia su viaje en la nariz o la garganta. Ahí, en las mucosas que las protegen, encuentra la bienvenida ideal. Las células de esta región están cubiertas de una proteína llamada ACE2 que el SARS-CoV-2 reconoce y utiliza para fusionarse con ellas e introducir su material genético. Una vez dentro, les ordena detener sus funciones normales y obliga a crear más y más virus en el interior de estas células. Antes de morir, fabricarán millones de copias del coronavirus que después infectarán a células vecinas o saldrán del cuerpo para invadir a otra persona.</p>
                    <p>En los siguientes días, el coronavirus se sigue propagando y migra hacia la faringe y la laringe. Para la gran mayoría de pacientes (algunos estiman que el 80%), la enfermedad será leve. Por ahora es difícil saber qué significa eso. Hay quienes ni siquiera se enterarán de que enfermaron. Para otros, la infección será más fuerte que cualquier resfriado común que hayan tenido antes. Pero su sistema inmune terminará por domarla. Un 20% de pacientes seguirá empeorando.</p>
                    <p>El coronavirus continúa descendiendo y llega a los pulmones. Este es el momento que los médicos temen. Si el SARS-CoV-2 infecta a las células que rodean los alveolos, inicia una batalla muchas veces mortal entre el virus y el sistema inmune. Las defensas del cuerpo atacan al coronavirus y a las células infectadas, dañando también a los pulmones a su paso.</p>
                </div>
                <div class="mt-10 pl-8 pr-8">
                    <img src="{{asset('img/coronavitus.jpg')}}" alt="coronavairus">
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>