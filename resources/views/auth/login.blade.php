@extends('layouts.auth')
@section('front-title','Signin')
@section('front-auth')


<!--start sign in -->
<section class="sign-in">
    <div class="layout"></div>
    <div class="container">
        <div class="content">
            <div class="header text-center">
                <h5>Sign In</h5>
            </div>
            <form id="signinForm" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label>E-Mail</label>
                    <input id="email" type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">


                    <label>Password</label>

                    <input id="password" placeholder="Enter your password"  type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    @if (Route::has('password.request'))
                        <a class="form-text text-white" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                </div>

                <div class="form-group">
                    <div class="form-check d-flex align-items-center">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="buttom mt-4 text-center">
                    <button type="submit"  class="btn btn-outline rounded-pill">Sign In</button>
                </div>

            </form>


            <h4 class="text-center">First Time <a href="{{route('register')}}">
                    - Create New Account
                </a>
            </h4>

        </div>
    </div>
</section>






@endsection
