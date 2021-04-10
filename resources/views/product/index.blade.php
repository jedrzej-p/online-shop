@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (count($products) > 0)
            @foreach ($products as $product)
                <div class="col-12 col-md-6 col-lg-3 pt-3">
                    <div class="row mx-0 product-box">
                        @if(file_exists( public_path() . '/images/products/photos/' . $product->id . 'front.webp'))
                        @else
                            <img class="col-12 px-0" src="/images/shop-placeholder.webp" alt="">
                        @endif
                        <p class="col-12 product-name px-2 mb-0 pb-0">{{ $product->name }}</p>
                        <p class="col-12 product-price px-2">{{ $product->price }}<small> zł</small></p>
                        <div class="col-12 d-flex justify-content-center pb-2">
                            <a class="btn btn-success" href="{{ route('product_detail', [$product->id, $product->name]) }}">Przejdź</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
