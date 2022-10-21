@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

@endsection

@section('contenido')
    <style>
        input:focus {
            border-color: rgb(32, 107, 80);
            box-shadow: 0 1px 1px rgb(32, 107, 80)inset, 0 0 8px rgb(32, 107, 80);
            outline: 0 none;
        }
    </style>
    <br>
    <br>
    <br>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header" name="datos_solicitante">
                    <h4>Información del usuario a registrar:</h4>
                </div>
            </div>
        </nav>
    </div>

    <form action="/crear" method="POST">
        @csrf
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-3"><strong>Nombre(s):</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" id="name" name="name" type="text"
                        placeholder=" Tu nombre " value="{{ old('name') }}" required/>
                </div>
                <br>
                <br>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-3"><strong>Apellido paterno:</strong></div>
                <div class="col-md-3">
                    <input class="border-success" id="apellido_paterno" name="apellido_paterno" type="text"
                        placeholder=" Tu apellido paterno " value="{{ old('apellido_paterno') }}" required/>
                </div>
                <br>
                <br>
                @error('apellido_paterno')
                    <div class="alert alert-danger w-75 ">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-3"><strong>Apellido materno:</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" id="apellido_materno" name="apellido_materno" type="text"
                        placeholder=" Tu apellido materno " value="{{ old('apellido_materno') }}" required/>
                </div>
                <br>
                <br>
                @error('apellido_materno')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="row">
                <div class="col-md-3"><strong>Función:</strong></div>
                <div class="col-md-3">
<<<<<<< HEAD
                    <input class="border border-success" id="funcion" name="funcion" type="text"
=======
                    <input class="border border-success" id="rol" name="rol" type="text"
>>>>>>> origin/main
                        placeholder=" Puesto o Cargo "  required/>
                </div>
                <br>
                <br>
                @error('apellido_materno')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="row">
                <div class="col-md-3"><strong>Email:</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" id="email" name="email" type="email"
                        placeholder=" nombre@ejemplo.com " value="{{ old('email') }}" required/>
                </div>
                <br>
                <br>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3"><strong>Contraseña:</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" id="password" name="password" type="password"
                        placeholder=" Contraseña " required/>
                </div>
                <br>
                <br>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-3"><strong>Repite tu contraseña:</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" id="password_confirmation" name="password_confirmation"
                        type="password" placeholder=" Repite tu contraseña " required/>
>>>>>>> 3ef3f6f86beedf9f46aeebace4c04257449b5582
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
