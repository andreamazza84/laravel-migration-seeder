@extends('layout.app')

@section('title')
All videogames
@endsection

@section('content')
<h1>All videogames</h1>
<a href="{{ route('posts.create') }}"> Create a new product</a>

<table>
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
                    <a href="{{ route('posts.show', $product->id) }}">View</a>
                    <a href="{{ route('posts.edit', $product->id) }}">Edit</a>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection