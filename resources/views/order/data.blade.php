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
    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <div class="row mx-0">
            <div class="form-group col-12 col-lg-6">
                <label for="formGroupExampleInput">Imię</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name" required>
            </div>
            <div class="form-group col-12 col-lg-6">
                <label for="formGroupExampleInput">Nazwisko</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="surname" required>
            </div>
            <div class="form-group col-12 col-lg-6">
                <label for="formGroupExampleInput">Nr. telefonu</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="phone" required>
            </div>
            <div class="form-group col-12 col-lg-6">
                <label for="formGroupExampleInput">Adres email</label>
                <input type="email" class="form-control" id="formGroupExampleInput" name="email" required>
            </div>
            <div class="form-group col-12 col-lg-6">
                <label for="formGroupExampleInput">Ulica i numer</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="address" required>
            </div>
            <div class="form-group col-12 col-lg-6">
                <label for="formGroupExampleInput">Miejscowość</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="town" required>
            </div>
            <div class="form-group col-12 col-lg-6">
                <label for="formGroupExampleInput">Kod pocztowy</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="postal_code" required>
            </div>
            <div class="form-group col-12 col-lg-6">
                <label for="formGroupExampleInput">Poczta</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="post" required>
            </div>
            <div class="form-group col-12">
                <h2>Wybór transportu</h2>
                @foreach ($transports as $transport)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="transport" id="transportRadio" value="{{ $transport->id }}" required>
                        <label class="form-check-label" for="transportRadio">{{ $transport->name }}, koszt: {{ $transport->price }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group col-12"><button type="submit" class="btn btn-primary">Przejdź do płatności</button></div>
        </div>
    </form>
</div>
@stop