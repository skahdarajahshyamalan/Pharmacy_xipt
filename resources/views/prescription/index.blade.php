@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Prescription</div>

                <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="deliveryaddress" class="col-md-4 col-form-label text-md-right">{{ __('deliveryaddress') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="deliveryaddress" name="deliveryaddress" rows="3" ></textarea>
                                @error('deliveryaddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $deliveryaddress }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('note') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="note" name="note" rows="3" ></textarea>
                                @error('note')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $note }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="delideliverytime" class="col-md-4 col-form-label text-md-right">{{ __('delivery time') }}</label>

                            <div class="col-md-6">
                                <input id="delideliverytime" type="time" class="form-control @error('delideliverytime') is-invalid @enderror" name="delideliverytime" required autocomplete="delideliverytime">

                                @error('delideliverytime')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $delideliverytime }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>

                            <div class="col-md-6">
                               <textarea class="form-control" id="address" name="address" rows="3" ></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contactno" class="col-md-4 col-form-label text-md-right">{{ __('contact no') }}</label>

                            <div class="col-md-6">
                                <input id="contactno" type="tel" class="form-control" name="contactno" required >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="DOB" class="col-md-4 col-form-label text-md-right">{{ __('DOB') }}</label>
                            <div class="col-md-6">
                                <input id="DOB" type="date" class="form-control" name="DOB" required >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection