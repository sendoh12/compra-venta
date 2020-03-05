@extends('Paginasinicio.inicio')

@section('title', 'Portfolio')


@section('content')
    <h1>Portfolio</h1>

    <ul>
        
            

            {{-- <tbody>
                @forelse ($projects as $item)
                    <li><a href=" {{ route('portfolio.show', $item) }} ">{{ $item->tittle }}</a>  <br> </li>
                    <li> {{ $item->updated_at->diffForHumans() }} <br></li>
                @empty
                    <li> No hay proyectos para mostrar </li>
                @endforelse 
            </tbody>
            
        
            {{ $projects->links() }} --}}
            
                
        
        
    </ul>
    

@endsection