@extends('layout.app')

@section('name', $product->name.' - Show')

@section('content')
    <h1>{{ $product->name }}</h1>
    <hr>
    <div class="notes">
        <h5>{{ $product->category }} [category]</h5>
        <p>- Product description: {{ $product->description }} <br>- Stock: {{ $product->stock }}</p>
        <hr>
        @if ($product->created_at)
            <p>This product was created {{ $product->created_at->diffForHumans() }}</p>
        @endif
    </div>
@endsection