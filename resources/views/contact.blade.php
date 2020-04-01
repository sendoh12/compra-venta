@extends('PaginasInicio.inicio')

@section('title', 'Contact')
{{-- @endsection --}}

@section('content')
    <h1>Contact</h1>

    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <input name="name" type="text" placeholder="Nombre del contacto..."><br>
        <input name="email" type="email" placeholder="Correo electronico..."><br>
        <input name="subject" placeholder="Asunto..."><br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="Mensaje..."></textarea><br>  
        <button>Enviar</button>      
    </form>
@endsection