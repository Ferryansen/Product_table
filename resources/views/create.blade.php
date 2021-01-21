@extends('layout.app')

@section('name', 'Products - Create')

@section("content")
    <section id="pagestore">
        <h1>Insert Your Product</h1>
        <hr>
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
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
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <div class="form-input">
                <label for="stock">Stock</label>
                <input class="input" type="number" name="stock">
            </div>
            <button class="btncr" type="submit">Submit</button>
        </form>
    </section>
@endsection