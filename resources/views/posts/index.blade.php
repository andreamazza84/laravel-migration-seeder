@extends('layout.app')

@section('title')
All videogames
@endsection

@section('content')
<h1>All videogames</h1>
<a class="btn" href="{{ route('posts.create') }}"> Create a new product</a>

<table class="index">
    <thead>
        <th>ID</th>
        <th>Cover</th>
        <th>Title</th>
        <th>Description</th>
        <th>Created</th>
        <th>Updated</th>

    </thead>
    <tbody>
        @foreach ($products as $product)    
            <tr>
                <td>{{ $product->id }}</td>
                <td><img width="80px" src="{{ $product->cover }}" alt="missing cover"></td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->body }}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>
                <td>
                    <a class="btn" href="{{route('posts.show', [$product->id])}}">View</a>
                    <a class="btn" href="{{route('posts.edit', [$product->id])}}">Edit</a>
                    <form action="{{ route('posts.destroy', $product->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection