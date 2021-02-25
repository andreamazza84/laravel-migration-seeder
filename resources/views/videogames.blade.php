@extends('layout.app')

@section('title')
Videogames
@endsection

@section('content')
    <h1>Videogames</h1>
        @foreach ($products as $item)
        <img class="cover" src="{{ $item->cover }}" alt="missing cover">
            <div>{{ $item->title }}</div>
            <div>{{ $item->body }}</div>

        @endforeach
@endsection