@extends('layouts.plantilla')

@section('title','Home')

@section('content')

@php
    $color = 'indigo';
@endphp



<h1>Pagina del Home</h1>
<div class="container mx-auto">
    <x-alert :color="$color" class="mb-4">
        <x-slot name="title">
            Aprovecha!
        </x-slot>
        Aprovecha las ofertas unicas en nuestro sitio web
    </x-alert>
</div>


@endsection 
