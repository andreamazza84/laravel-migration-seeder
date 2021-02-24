@extends('layout.app')

@section('title')
Edit videogame
@endsection

@section('content')
<h1>Modify videogame information</h1>

<form class="edit-create" action="{{ route('posts.update', $product->id) }}", method="post">
    @csrf
    @method('PUT')
    <label for="title">Change title</label>
    <input type="text" id="title" placeholder="title" name="title" value="{{ $product->title }}">
    <label for="body">Change description</label>
    <textarea id="body" name="body" cols="30" rows="10">{{ $product->body }}</textarea>
    <label for="cover">Change cover path (Es. http:\\coverpath.png)</label>
    <input type="text" id="cover" name="cover" placeholder="cover" value="{{ $product->cover }}">
    {{-- Submit --}}
    <input type="submit" value="Insert">

</form>
@endsection