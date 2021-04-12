@extends('layouts.app')


@section('title','EMG MANTENCIONES - CONTACT')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">

				<form class="bg-white shadow rounded py-3 px-4" 
					action="{{ route('messages.store') }}" 
					method="POST" 
					accept-charset="utf-8">
					@csrf
					<h1 class="display-5 text-center">@lang('Contact')</h1>
					<hr>
					<div class="form-group">
						<input class="form-control bg-light shadow-sm  @error('name') is-invalid @else border-0 @enderror " 
							id="name" 
							type="text" 
							placeholder="nombre..." 
							name="name" 
							value="{{ old('name')}}">
							@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							
					</div>
					
					<div class="form-group">
						<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror " 
						type="email" 
						name="email" 
						placeholder="email" 
						value="{{ old('email') }}">
						@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
						@enderror
					</div>
					<div class="form-group">
					<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror " 
						type="subject" 
						name="subject" 
						placeholder="asunto..." 
						value="{{ old('subject') }}">
						@error('subject')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					
					<div class="form-group">
						<textarea class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror " 
							name="content" 
							placeholder="mensaje..." 
							value="{{ old('content') }}">
						</textarea>
						@error('content')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						
					</div>
					<button class="btn btn-primary btn-lg btn-block" type="submit">enviar</button>
				</form>
			</div>
		</div>
	</div>
@endsection
