@extends('layout')

@section('title', 'Portfolio '.$valor->tittle)


@section('content')
    <h1> {{ $valor->desciption }} </h1>
    <h3> {{ $valor->created_at }} </h3>
    <h3> {{ $valor->updated_at }} </h3>

    
    
    

@endsection