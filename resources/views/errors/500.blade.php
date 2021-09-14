@extends('adminlte::page')

@section('title', 'Error 500')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Error 500 | Error interno del servidor</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-danger">500</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-danger"></i>¡UPS! Algo salió mal.</h3>

          <p>
            Trabajaremos para solucionarlo de inmediato.
            Mientras tanto, puede <a href="{{ url('home') }}">volver al inicio</a> o intentar utilizar el formulario de búsqueda.
          </p>

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Buscar">

              <div class="input-group-append">
                <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>  
@stop

