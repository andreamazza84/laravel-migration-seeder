@extends('layout.app')

@section('title')
Videogames
@endsection

@section('content')
    <h1>Videogames</h1>
    @foreach ($products as $item)
    <div class="card">
        <img class="cover" src="{{ $item->cover }}" alt="missing cover">
        <div class="title">{{ $item->title }}</div>
        <div class="body">{{ $item->body }}</div>
    </div>
    @endforeach
@endsection

