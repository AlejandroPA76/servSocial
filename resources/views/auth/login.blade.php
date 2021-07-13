@extends('layouts.app')

@section('content')
  <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="{{ route('login') }}" method="POST" class="row g-3">
                        @csrf
                        <h4>Iniciar Sesion</h4>
                        <div class="col-12">
                            <label>Ingresa tu correo:</label>
                            <input type="email" name="email" id="email"class="form-control" placeholder="correo">
                        </div>
                        <div class="col-12">
                            <label>Ingresa tu contrasena:</label>
                            <input type="password" name="password" id="password"class="form-control" placeholder="constrasena">
                        </div>
            
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark float-end">{{ __('Login') }}</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Eres nuevo? <a href="{{route('register')}}">registrate</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
