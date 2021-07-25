
@extends('layouts.dashboard')


@section('title','Marca y Modelos')
<!--------------------------------->
@section('content_header')
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-lg-12 col-sm-6 text-center">
            <h1 class="m-0 text-dark">Marca y Modelos</h1>
            <hr>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection
<!--------------------------------->
@section('content')
<section class="col-lg-12 mx-auto">
    
 <div class="col-12 text-right">
  <a class="btn btn-primary" href="{{route('marca.create')}}" title=""><i class="fa fa-plus" aria-hidden="true"></i>
   Agregar Marca
  </a>
  <a class="btn btn-primary" href="{{route('modelo.create')}}" title=""><i class="fa fa-plus" aria-hidden="true"></i>
    Agregar Modelo
   </a>
 </div>

<div>Mostrar marcas y modelos registradas</div>

</section>

<!---------------------------------------------------------------->
@endsection
