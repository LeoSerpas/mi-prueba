<div class="form-group row">
   <div class="col-md-4 col-form-label text-md-end">
      {!! form::label('nombre','Nombre*') !!}
   </div>
   <div class="col-sm-8">
      <div class="form-group {{ $errors->has('nombre') ? 'has-error' : "" }}">
      <i>{{ Form::text('nombre',NULL, ['class'=>'form-control', 'id'=>'nombre', 'required']) }} </i>
      <div class="help-block"> 
         <strong>{{ $errors->first('nombre') }}</strong>
      </div>
   </div>
</div>
</div><br>
<div class="form-group row">
   <div class="col-md-4 col-form-label text-md-end">
      {!! form::label('apellido','Apellido*') !!}
   </div>
   <div class="col-sm-8">
      <div class="form-group {{ $errors->has('apellido') ? 'has-error' : "" }}">
      <i>{{ Form::text('apellido',NULL, ['class'=>'form-control', 'id'=>'apellido', 'required']) }} </i>
      <div class="help-block"> 
         <strong>{{ $errors->first('apellido') }}</strong>
      </div>
   </div>
</div>
</div><br>
<div class="form-group row">
   <div class="col-md-4 col-form-label text-md-end">
      {!! form::label('edad','edad*') !!}
   </div>
   <div class="col-sm-8">
      <div class="form-group {{ $errors->has('edad') ? 'has-error' : "" }}">
      <i>{{ Form::number('edad',NULL, ['class'=>'form-control', 'id'=>'edad', 'required']) }} </i>
      <div class="help-block"> 
         <strong>{{ $errors->first('edad') }}</strong>
      </div>
   </div>
</div>
</div><br>

<div class="row mb-3">
<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail*') }}</label>

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
   <div class="col-md-4 col-form-label text-md-end">
      {!! form::label('habilidades','Habilidades*') !!}
   </div>
   <div class="col-sm-8">
      <div class="form-group {{ $errors->has('habilidades') ? 'has-error' : "" }}">
      <select id="habilidades" name="habilidades" class="form-control">
         <option disabled selected>Seleccione Habilidad</option>
         <option value="PHP">php</option>
         <option value="HTML">HTML</option>
         <option value="CSS">CSS</option>
         <option value="Laravel">Laravel</option>
         <option value="Java">Java</option>
         <option value="JS">JS</option>
         <option value="Angular">Angular</option>
         <option value="Node">Node</option>
         <option value="Linux">Linux</option>
         <option value="Servidores">Servidores</option>
      </select>
      <div class="help-block"> 
         <strong>{{ $errors->first('habilidades') }}</strong>
      </div>
   </div>
</div>
</div><br>

<div class="form-group text-center" >
   {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success ','type'=>'submit']) }}
   <a href="{{ route('prueba.index') }}" class="btn btn-primary">Regresar</a>
</div>
<br>