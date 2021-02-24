@extends('layout.app')

@section('title')
Insert a new videogame
@endsection

@section('content')
<h1>Insert a new videogame</h1>

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

<form class="edit-create" action="{{ route('posts.store')}}", method="post">
    @csrf
    @method('POST')

    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="title">Insert title</label>
    <input type="text" id="title" placeholder="title" name="title" value="{{ old('title') }}">

    @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="body">Insert description</label>
    <textarea id="body" name="body" cols="30" rows="10" >{{ old('body') }}</textarea>

    @error('cover')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="cover">Insert cover path  (Es. http:\\coverpath.png)</label>
    <input type="text" id="cover" name="cover" placeholder="cover" value="{{old('cover')}}">

    {{-- Submit --}}
    <input class="btn" type="submit" value="Insert">

</form>
@endsection