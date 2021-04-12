<nav class="navbar navbar-expand-lg navbar-light bg-white shadow d-flex justify-content-between">
		<div class="container">
			<a class="navbar-brand" href="{{ route('home') }}">
			    <img src="/dist/img/emg.jpg" width="40" height="40" class="brand-image img-circle elevation-2 d-inline-block align-center " alt="" loading="lazy" style="opacity: .8; ">
			    <span class="brand-text font-weight-light ">{{ config('app.name') }}</span>
			</a>
		
            <button class="navbar-toggler" type="button" 
                data-toggle="collapse" 
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
				aria-label="{{__('Toggle navigation')}}">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">		
		<ul class="nav nav-pills ml-auto">
			<li class=" nav-item">
				<a class="nav-link {{setActive('home')}}" href="{{ route('home')}}" title=""> 
					@lang ('Home')
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{setActive('about')}}" href="{{route('about')}}" title="">
					@lang ('About')
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{setActive('contact')}}" href="{{route('contact')}}" title="">
					@lang ('Contact')
				</a>
			</li>
			@guest
			<li id="login-form" class="nav-item">
				<a class="nav-link {{setActive('login')}}"  href="{{route('login')}}" title="">
					@lang ('Login')
				</a>
			</li>
			@else
			<li class=" nav-item">
				<a class="nav-link {{setActive('cliente')}}" href="{{route('cliente.index')}}" title="">
					@lang ('panel cliente')
				</a>
			</li>
			<li class="nav-link">
				<a class="{{setActive('logout')}}" 
				href="#" 
				onclick="event.preventDefault();
             	document.getElementById('logout-form').submit();"> 
             	@lang('Logout')
         		</a>
         	</li>
			@endguest
		</ul>	
	</div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	@csrf
</form>