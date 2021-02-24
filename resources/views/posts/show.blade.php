@extends('layout.app')

@section('title')
View videogame
@endsection

@section('content')
{{-- dd($product->title) --}}
<h1>{{ $product->title }}</h1>
<p>{{ $product->body }}</p>
<img src="{{ $product->cover }}" alt="missing cover"> 
<p>{{ $product->created_at }}</p>
<p>{{ $product->updated_at }}</p>

@endsection