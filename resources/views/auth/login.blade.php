@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card registration shadow-lg">
                <div class="card-heading col-md-5">
                    <img class="regis-pic col-md-12" src="{{ asset('images/login-pic.jpg') }}" alt="">
                </div>

                <div class="card-body col-md-7">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                      
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="name">E-Mail</label>
                                <input id="email" type="email" placeholder="example@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                <label for="name">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                            
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                     

                        <div class="form-group row mb-0 mt-5">
                            <div class="col-md-12 mt-5">
                                <button type="submit" class="btn btn-info registration">
                                    ログイン
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link pl-0 mt-2" href="{{ route('password.request') }}">
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