@extends('layouts.app')
@section('title', 'Prueba Ingresar Nuevo')
@section('content')
<div class="row">
   <div class="col-md-10 col-md-offset-3">
      <h2 style="text-align:center"> Ingreso de datos: </h2>
      <h4 style="text-align:center"> Datos marcados, (*) Obligatorios </h4>
      <br>
      @if ($message = Session::get('error')) 
      <div class="alert alert-danger">
         <p>{{ $message }}</p>
      </div>
      @endif
      {{ Form::open(['route'=>'prueba.store', 'method'=>'POST']) }}
      @include('prueba.form_master')
      {{ Form::close() }}
   </div>
</div>
@endsection