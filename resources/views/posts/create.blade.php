@extends('layout.app')

@section('title')
Insert a new videogame
@endsection

@section('content')
<h1>Insert a new videogame</h1>

<form action="{{ route('posts.store')}}", method="post">
    @csrf
    @method('POST')
    <label for="title">Insert title</label>
    <input type="text" id="title" placeholder="title" name="title">
    <label for="body">Insert description</label>
    <textarea id="body" name="body" cols="30" rows="10"></textarea>
    <label for="cover">Insert title</label>
    <input type="text" id="cover" placeholder="cover">
    
    <input type="submit" value="Insert">

</form>
@endsection