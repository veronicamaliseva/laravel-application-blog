@extends('layouts.app')

@section('content')
<div class="container tumss">
    <div class="row pt-5 justify-content-center text-center">
      <div class="div login-header">
       <div class="col">
         <p>LOG IN</p>
         </div>
        </div>
       </div>
    </div>
    <div class="row pt-3 justify-content-center">
    <div class="col-md-5">
            <div class="card text-center">
                <div class="card-header dark pt-4">{{ __('SIGN IN WITH YOUR E-MAIL ADDRESS') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="card-text col-md-3 col-form-label text-md-right">{{ __('E-MAIL') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="card-text col-md-3 col-form-label text-md-right">{{ __('PASSWORD') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mt-3">
                            <div class="col">
                                <button type="submit" class="btn pt-3 email">
                                    {{ __('LOG IN') }}
                                </button>
                        </div>                              
                        </div>
                        <div class="form-group row justify-content-center mb-0">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                    </form>
                   
                </div>
            </div>
        </div>
        <div class="col-md-5">
        <div class="socials">
            <div class="card text-center">
                <div class="card-header pt-4">{{ __('OR LOG IN WITH') }}</div>
                <div class="row justify-content-center pt-5 pb-5">
                    <a href="{{ route('fblogin') }}" class="btn facebook pt-3 pb-3"><i class="fab fa-facebook-square"></i>  <b>Log in with Facebook</b></a>
                </div>
            <p><b>ARE YOU NEW TO BLOG?</b></p>
            <div class="row justify-content-center pt-4 pb-4">
            <a href="/register" class="btn registration pt-3 pb-3"><b> REGISTER NOW</b></a>
            </div>
        </div>
        </div>
      
    </div>
</div>
@endsection
