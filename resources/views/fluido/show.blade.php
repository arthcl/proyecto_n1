@extends('layouts.dashboard')


@section('title','PANEL - FLUIDOS')
<!--------------------------------->
@section('content_header')
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-lg-12 text-center col-sm-6">
            <h1 class="m-0 text-dark ">Detalles del fluido</h1>
            <hr>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection
<!--------------------------------->

@section('content')
<section class="col-lg-9 text-center connectedSortable mx-auto">

<div class="container">
		<div class="bg-white p-5 shadow rounded">
			<h1 class="display-5">
				{{ $fluido->nombre }}
			</h1>
			<p class="text-black-50">
				{{ $fluido->created_at->diffForHumans() }}
			</p>

			<div class="d-flex justify-content-between align-items-center">
				<a class="btn btn-outline-primary" 
					href="{{ route('fluido.index') }}" 
					title="">
					Regresar
				</a>
			
					<div class="btn-group">
						<a 
							class="btn btn-primary btn-group-sm"
							href="{{ route('fluido.edit', $fluido) }}" 
							title="">
							Editar
						</a>
						<a 
							class="btn btn-danger"
							href="#"
							onclick="document.getElementById('delete-fluido').submit()" 
							title="">
							Eliminar		
						</a>
					</div>
					
					<form 
						class="d-none" 
						id="delete-fluido" 
						action="{{ route('fluido.destroy', $fluido) }}" 
						method="POST" 
						accept-charset="utf-8">
						@csrf
						@method('DELETE')
					</form>
		
			</div>
			
		</div>
	</div>
</section>
@endsection