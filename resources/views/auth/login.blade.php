@extends('layouts.app')

@include('components.nav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card logincard">
            <div class="row justify-content-center py-4">
                <h4> Iniciar sesión </h4>
            </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                          
                            <div class="col-md-10 md-form">
                                <input id="email" type="email" class="form-control mb-2 @error('email') is-invalid @enderror" name="email" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                        
                            <div class="col-md-10 md-form">
                                <input id="password" type="password" class="form-control mb-2 @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-check text-center justify-content-center">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 justify-content-center">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-outline-info btn-rounded waves-effect button-details">
                                    {{ __('Entrar') }}
                                </button>

                            </div>
                        </div>
                        <div class="row justify-content-center text-center mt-4">
                            @if (Route::has('password.request'))
                                <a class="text-center btn btn-link font2 char-size" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
