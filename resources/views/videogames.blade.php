@extends('layout.app')

@section('title')
Videogames
@endsection

@section('content')
<h1>Videogames</h1>
@foreach ($products as $item)
<img src="{{ $item->cover }}" alt="Cover">
    <div>{{ $item->title }}</div>
    <div>{{ $item->body }}</div>

@endforeach

@endsection