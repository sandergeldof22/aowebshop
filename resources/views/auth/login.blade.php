@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="top-image-holder">
        <img class="order-banner" src="images/Nix.png">
    </div>
        <div class="login-box">
            <div class="login-styles">
                <div class="login-title">{{ __('Login') }}</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="login-group">
                            <label for="email" class="login-email">{{ __('E-Mail Address') }}</label>
                                <div class="login-email">

                                <input id="email" type="email" class="login-input" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="login-group">
                            <label for="password" class="login-password">{{ __('Password') }}</label>

                            <div class="login-password">
                                <input id="password" type="password" class="login-input" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="login-group">
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" class="login-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="login-remember" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="login-group">
                            <div class="login-submit">
                                <button type="submit" class="auth-button">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <p class="login-forgot"><a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a></p>
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
