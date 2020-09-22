@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="top-image-holder">
        <img class="order-banner" src="images/Nix.png">
    </div>
        <div class="register-box">
            <div class="register-styles">
                <h2 class="register-title">Registreer</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="login-group">
                            <label for="name" class="register-name">{{ __('Name') }}: </label>
                            <div class="login-name">
                                                            
                                <input id="name" type="text" class="login-input" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="login-group">
                            <label for="email" class="register-email">{{ __('E-Mail Address') }}: </label> 
                            <div class="login-email">

                                <input id="email" type="email" class="login-input" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="login-group">
                            <label for="password" class="register-password">{{ __('Password') }}</label>
                            <div class="login-password">
                                                            
                                <input id="password" type="password" class="login-input" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="login-group">
                            <label for="password-confirm" class="confirm-register-password">{{ __('Confirm Password') }}</label>
                            <div class="confirm-login-password">    

                                <input id="password-confirm" type="password" class="login-input" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="login-group">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="auth-button">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
