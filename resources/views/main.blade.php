@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (count($products) > 0)
            @foreach ($products as $product)
                <p>{{ $product->name }}</p>
            @endforeach
        @endif
    </div>
</div>
@endsection
