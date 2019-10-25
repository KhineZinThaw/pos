@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Order') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{url('/order')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="code_id" class="col-md-4 col-form-label text-md-right">{{ __('Code_id') }}</label>

                            <div class="col-md-6">
                                <input id="code-id" type="text" class="form-control @error('code_id') is-invalid 
                                @enderror" name="code_id" value="{{ old('code_id') }}" required autocomplete="off" autofocus>

                                @error('code_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quality" class="col-md-4 col-form-label text-md-right">{{ __('Quality') }}</label>

                            <div class="col-md-6">
                                <input id="quality" type="text" class="form-control @error('quality') is-invalid
                                 @enderror" name="quality" value="{{ old('quality') }}" required autocomplete="off" autofocus>

                                @error('quality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>

                            <div class="col-md-6">
                                <input id="total" type="text" class="form-control @error('total') is-invalid 
                                @enderror" name="total" value="{{ old('total') }}" required autocomplete="off" autofocus>

                                @error('total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customer_id" class="col-md-4 col-form-label text-md-right">{{ __('Customer_id') }}</label>

                            <div class="col-md-6">
                                <input id="customer_id" type="text" class="form-control @error('customer_id') is-invalid 
                                @enderror" name="customer_id" value="{{ old('customer_id') }}" required autocomplete="off" autofocus>

                                @error('customer_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>

                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
