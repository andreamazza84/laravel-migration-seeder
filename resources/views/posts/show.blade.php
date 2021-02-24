@extends('layout.app')

@section('title')
View videogame
@endsection

@section('content')
{{-- dd($product->title) --}}
<h1>{{ $product->created_at }}</h1>
@endsection