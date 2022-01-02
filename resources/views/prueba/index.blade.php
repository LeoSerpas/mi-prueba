@extends('layouts.app')
@section('title', 'Prueba')
@section('content')
<div class="row py-lg-6">
   <div class="col-md-5">
      <h2 class="col-md-3">Paisajes</h2>
   </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
   <p>{{ $message }}</p>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-danger">
   <p>{{ $message }}</p>
</div>
@endif

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="/images/2.jpg" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="/images/3.jpg" alt="New York" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<br>
<div class="col-md-5">
      <h2 class="col-md-3">Grid</h2>
   </div>

<div class="container">
   <div class="row">
       <div class="col">
      <img src="/images/g1.png" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="col-md-5">
      <h3 class="col-md-8">Computación</h3>
      <p>El término computación tiene su origen en el vocablo en latín computatio. Esta palabra permite abordar la noción de cómputo como cuenta o cálculo, pero se usa por lo general como sinónimo de informática</p>
   </div>
    </div>
    <div class="col">
      <img src="/images/g2.jpg" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="col-md-5">
      <h3 class="col-md-8">Programación</h3>
      <p>La programación es el proceso utilizado para idear, ordenar estructurar o componer las acciones necesarias para realizar un objetivo o un proyecto determinado. </p>
   </div>
    </div>
    <div class="col">
      <img src="/images/g3.png" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="col-md-5">
      <h3 class="col-md-8">La Nube</h3>
      <p>La Nube en informática se refiere a un servicio de computación que procesa y almacena datos por medio de una red de servidores. El término proviene del inglés, en el que se usa la expresión cloud computing.</p>
   </div>
    </div>
   </div>
</div>

<br>

<!-- Modal Cover 100%-->

<div class="container mt-3" style="color: white; font-family: Verdana; background-image:url('/images/modal.jpg');
    background-repeat:no-repeat; background-size:cover 100%;">
  <h3 >Modal.</h3>
  <p>Presiona el botón para abrir el modal.</p>
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Abrir Modal
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Esto es un Modal</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Mensaje...
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div><br>

<!-- Tabla de datos -->
<div class="card mb-8">
   <h3>Tabla de datos</h3>
   <div class="card-header">     
      <a href="prueba/create" class="btn btn-primary float-md-left" prueba="button" aria-pressed="true">Nueva Fila</a>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>N°</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Edad</th>
                  <th>Email</th>
                  <th>Habilidades</th>
               </tr>
            </thead>
            <tfoot>
               <tr>
                  <th>N°</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Edad</th>
                  <th>Email</th>
                  <th>Habilidades</th>

               </tr>
            </tfoot>
            <tbody>
               <?php $no=1; ?>
               @foreach ($pruebas as $prueba)
               <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $prueba->nombre }}</td>
                  <td>{{ $prueba->apellido }}</td>
                  <td>{{ $prueba->edad }}</td>
                  <td>{{ $prueba->email }}</td>
                  <td>{{ $prueba->habilidades }}</td>
                  <td>
               </tr>
               @endforeach
            </tbody>
         </table>
         <div class="text-center" style="margin-left: 48%;">
               {!!$pruebas->render()!!}
            </div>
      </div>
   </div>
</div>

</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

@endsection