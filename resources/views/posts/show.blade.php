@extends('layout.app')

@section('title')
View videogame
@endsection

@section('content')
    <div class="show">
        {{-- dd($prodotto) --}}
        <h1>{{ $product->title }}</h1>
        <p>{{ $product->body }}</p>
        <img src="{{ $product->cover }}" alt="missing cover"> 
        <p>{{ $product->created_at }}</p>
        <p>{{ $product->updated_at }}</p>
    </div>    
@endsection