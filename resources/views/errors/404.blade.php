@extends('adminlte::page')

@section('title', 'Error 404')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Error 404 | Página no encontrada</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> 

    <!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-warning"> 404</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-warning"></i> ¡UPS! Página no encontrada.</h3>
          <p>
            No pudimos encontrar la página que buscaba.
            Mientras tanto, puedes <a href=" {{ url('home') }} ">volver al inicio</a> o intente utilizar el formulario de búsqueda.
          </p>
          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Buscar">
              <div class="input-group-append">
                <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
  </div>
@stop
