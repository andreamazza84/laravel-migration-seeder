@extends('layout.app')

@section('title')
Edit videogame
@endsection

@section('content')
<h1>Modify videogame information</h1>

{{-- Validation --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="edit-create" action="{{ route('products.update', $product->id) }}", method="post">
    @csrf
    @method('PUT')

    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="title">Change title</label>
    <input type="text" id="title" placeholder="title" name="title" value="{{ $product->title }}">
    
    @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="body">Change description</label>
    <textarea id="body" name="body" cols="30" rows="10">{{ $product->body }}</textarea>
    
    @error('cover')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="cover">Change cover path (Es. http:\\coverpath.png)</label>
    <input type="text" id="cover" name="cover" placeholder="cover" value="{{ $product->cover }}">
    
    {{-- Submit --}}
    <input class="btn" type="submit" value="Update">

</form>
@endsection