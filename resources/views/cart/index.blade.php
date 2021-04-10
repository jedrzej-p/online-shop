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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h1 class="card-header">Koszyk</h1>
                <div class="card-body px-0 px-lg-2">
                    <div class="table-responsive">
                        @if (count($cartItems) > 0)
                            <div>
                                <div class="row mx-0 col-12 mb-3" style="font-size: 17px">
                                    <div class="col-8 px-0">Produkt</div>
                                    <div class="col-2 text-right">Cena</div>
                                    <div class="col-2 text-right">Wartość</div>
                                </div>
                                @foreach  ($cartItems as $position)
                                    <div class="row mx-0 py-2 cart-item" style="position: relative; border-top: 1px solid gray">
                                        <div class="col-lg-8 col-12 row mx-0 p-0">
                                            <div class="col-8">
                                                <p>{{ $position->product->name }}</p>
                                            </div>
                                            <div class="col-lg-4 col-12 row mx-0 py-0">
                                                <div class="col-12 cart-quantity align-self-center">
                                                    <div class="input-group row mx-0 d-flex justify-content-start">
                                                        <form action="{{ route('cart.update', [$position->product_id]) }}" method="put">
                                                            <fieldset style="position: relative;">
                                                                <input class="cart-quan" type="number" name="amount" value="{!! $position->amount !!}" min="1" max="{{ $position->product->amount }}" step="1" />
                                                                <div class="input-cover"></div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-12 align-self-center row mx-0">
                                            <p class="col-12 px-0 text-right mb-2 mb-lg-3">{!! number_format($position->unit_price, 2, ',', ' ') . ' zł' !!}</p>
                                        </div>
                                        <div class="col-lg-2 col-12 align-self-center row mx-0">
                                            <p class="col-12 px-0 text-right mb-2 pr-3 mb-lg-3">{!! number_format($position->unit_price * $position->amount, 2, ',', ' ') . ' zł' !!}</p>
                                        </div>
                                        <div class="product-remove">
                                            <form action="{{ route('cart.destroy', [$position->product_id]) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn p-0"><i class="far fa-times-circle fa-lg"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row mx-0 col-12" style="border-top: 1px solid rgba(0, 0, 0, .3);">
                                    <div class="col-lg-12 col-7 text-right"><b>Suma: {!! number_format($total, 2, ',', ' ') . ' zł' !!}</b></div>
                                </div>
                            </div>
                            <div class="col-12 justify-content-end d-flex px-0 pt-3">
                                <a class="btn btn-primary" href="{{ route('order.index') }}">Przejdź dalej</a>
                            </div>
                        @else
                            <p>Koszyk jest pusty</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop