@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido usted ha iniciado sesión con su usuario.') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Seleccione en el menú Prueba para acceder a la vista index y poder ver los requerimientos resueltos.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
