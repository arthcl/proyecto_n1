
@if ($errors->any())
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<ul class="mb-0">
			@foreach ($errors->all() as $error)
				<li><small>{{ $error }}</small></li>
			@endforeach
		</ul>
		<button
			class="close"
			type="button"
			data-dismiss="alert"
			arial-label="Close"
			autofocus>
			<span arial-hidden="true">&times;</span>
		</button>		
	</div>

@endif