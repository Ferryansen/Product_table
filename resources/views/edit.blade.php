@extends('layout.app')

@section('name', 'Products - Update')

@section('content')
    <section id="pagestore">
        <h1>What to edit?</h1>
        <hr>
        <form action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-input">
                <label for="name">Product Name</label>
                <input class="input" type="text" name="name">
            </div>
            <div class="form-input">
                <label for="category">Product Category</label>
                <input class="input" type="text" name="category">
            </div>
            <div>
                <label for="description">Product Description</label>
                <textarea name="description" id="description" cols="30" rows="10">{{ $product->content }}</textarea>
            </div>
            <div class="form-input">
                <label for="stock">Stock</label>
                <input class="input" type="number" name="stock">
            </div>
            <button class="btncr" type="submit">Submit</button>
        </form>
    </section>
@endsection