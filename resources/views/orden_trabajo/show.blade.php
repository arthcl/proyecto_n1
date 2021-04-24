@extends('layouts.dashboard')
@section('title','orden de trabajo - ' . $orden_trabajo->descripcion )
<!--------------------------------->
@section('content_header')
	<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-lg-12 text-center col-sm-6">
						<h1 class="m-0 text-dark text-capitalize">{{ $orden_trabajo }}</h1>
						<hr>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
@endsection

<!--------------------------------->

@section('content')


<div class="container">

<div class="mt-3">

    <h4 class=" mb-3">
      <span class="text-muted">Actividad</span>
      <span class="badge bg-secondary rounded-pill">{{-- $orden_trabajo->count()--}}</span>
    </h4>
    <ul class="list-group mb-3">
            <li class="list-group-item list-group-item-primary">
                <div class="">
                <h6 class="my-0">{{--$item_ot--}}</h6>
                        <li class="list-group-item d-flex justify-content-between ">
                            <span>{{-- $item_actividad->descripcion --}}</span>
                            <strong>{{-- $item_actividad->item->sum('total')--}}</strong>

                              <li class="list-group-item text-muted d-flex justify-content-between ">
                                <span>{{--$item->item--}}</span>
                                <strong>{{--$item->total--}}</strong>

                              </li>
                              
                        </li>                                     
                    <li class="list-group-item d-flex justify-content-center ">
                      <span>Total (PCL)</span>
                      
                    </li> 
                </div>
                 
            </li>
 
            <h6 class="my-0">Sin orden de trabajo registrada</h6>




    </ul>
  </div>
</div>

@include('orden_trabajo.create_actividad')
  @endsection