@extends('layouts.app')

@section('content')
@if ( session()->exists('message') )
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger">
                    <p style="text-align: center; font-weight: bold; font-size: 1.25em;">{!! session('message') !!}</p>
                </div>
            </div>
        </div>
    </div>
@endif
<div class="container">
    <div class="row justify-content-center product-detail">
        <div class="col-12 col-lg-6">
            @if(file_exists( public_path() . '/images/products/photos/' . $product->id . 'front.webp'))
            @else
                <img class="col-12 px-0" src="/images/shop-placeholder.webp" alt="">
            @endif
        </div>
        <div class="col-12 col-lg-6 pt-3">
            <h1>{{ $product->name }}</h1>
            <small>Kod produktu: {{ $product->id }}</small>
            <form action="{{ route('cart.store') }}" method="POST" class="pt-3 form-inline">
                {{ csrf_field() }}
                <div class="form-group mr-2">
                    <label for="formAmountInput" class="mr-2">Ilość:</label>
                    <input class="form-control" type="number" name="amount" id="formAmountInput" value="1" min="1" step="1" max="{{ $product->amount }}">
                </div>
                <input type="hidden" name="product_id" value="{{ $product->id }}" />
                <button type="submit" class="btn btn-primary">Dodaj do koszyka</button>
            </form>
        </div>
        <div class="col-12 pt-4">
            <p class="product-description">
                {{ $product->description }}
            </p>
        </div>
    </div>
</div>
@endsection
