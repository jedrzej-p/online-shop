@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (count($products) > 0)
            @foreach ($products as $product)
                <div class="col-12">
                    {{ $product->name }}
                    <a href="{{ route('product_detail', [$product->id, $product->name]) }}">Przejdź</a>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
