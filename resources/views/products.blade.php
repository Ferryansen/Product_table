@extends('layout.app')

@section('name', 'Products')

@section('content')
    <section id="main">
        <h1>My Products</h1>
        <hr>
        <a class="btn btn-outline-warning" href="{{ route('product.create') }}">Add a product</a>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>

            @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a></td>
                <td>{{ $product->category }}</td>
                <td>
                    <p>{{ $product->description }}</p>
                </td>
                <td>{{ $product->stock }}</td>
                <td class="act">
                    <a class="btn btn-outline-success" href="{{ route('product.edit', $product->id) }}">Edit</a>
                    <form action="{{ route('product.delete', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </section>
@endsection