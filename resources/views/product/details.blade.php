@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <p>{{ $product->name }}</p>
    </div>
</div>
@endsection