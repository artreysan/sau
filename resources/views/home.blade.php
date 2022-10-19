@extends('adminlte::page')

@section('title', 'UTIC')

@section('content')
<br>
                <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Administrador') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Menu administrador para los usuarios de a fabrica de software')}}
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Menu administrador para los usuarios de a fabrica de software')}}
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Lorem ipsum dolor sit amet, consectetur adip lorem, sed diam nonum lore Lorem ipsum dolor sit amet, consectetur adip lorem, sed diam nonum lore
                    Lorem ipsum dolor sit amet, consectetur adip lorem, sed diam nonum loreLorem ipsum dolor sit amet, consectetur adip lorem, sed diam nonum loreLorem ipsum dolor sit amet, consectetur adip lorem, sed diam nonum loreLorem ipsum dolor sit amet, consectetur adip lorem, sed diam nonum lore')}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
