@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width:35rem; height:24rem; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
                <div class="card-header text-center fs-5 fw-bold" style="background-color:#0166FE; color:white;">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <img src={{ url('images/Kominfo.png') }} class="img-fluid rounded mx-auto d-block" alt="Responsive image" style="max-width: 100px; height: auto;">
                        <br>
                        <p class="text-center fw-bold" style="color:#0100CC"">{{ __('Please confirm your password before continuing.') }}</p>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
