
  
<nav class="navbar navbar-expand-lg shadow d-flex justify-content-between">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <div class="caja-logo-header">
                <img src="img/logo-blanco.png" alt="logo">
            </div>
        </a>
    
        <button class="navbar-toggler hamburguesa" type="button" 
            data-toggle="collapse" 
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-label="{{__('Toggle navigation')}}">
        <span class="navbar-toggler-icon">
            <img src="img/menu.png" alt="menu" class="img-responsive lineas">
        </span>
        </button>


        <div class="collapse navbar-collapse menu" id="navbarSupportedContent">		
            <ul class="nav nav-pills ml-auto">
                <li class=" nav-item">
                    <a class="nav-link sub" href="{{ route('home') }}" title=""> 
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sub" href="{{route('about')}}" title="">
                        Quiénes Somos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sub" href="{{route('contact')}}" title="">
                        Contacto
                    </a>
                </li>
                @guest
                <li id="login-form" class="nav-item">
                    <a class="iniciar-sesion"  href="{{route('login')}}" title="" id="iniciar-sesion">
                        Iniciar Sesión
                    </a>
                </li>
                    
                @else

                @switch(Auth::user()->tipo_usuario_id)
                    @case(1)
                        <li class=" nav-item">
                            <a  class="nav-link sub iniciar-sesion {{setActive('administrador.index')}}" href="{{route('administrador.index')}}" title="">
                                @lang ('administrador')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="iniciar-sesion" class="nav-link sub {{setActive('logout')}}"
                            href="#"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            @lang('Logout')
                            </a>
                        </li>
                        
                        @break
                
                    @case(2)
                        <li class=" nav-item">
                            <a  class="nav-link sub iniciar-sesion {{setActive('supervisor.index')}}" href="{{route('supervisor.index')}}" title="">
                                @lang ('Supervisor')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="iniciar-sesion" class="nav-link sub {{setActive('logout')}}"
                            href="#"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            @lang('Logout')
                            </a>
                        </li>
                        @break
                    @case(3)
                        <li class=" nav-item">
                            <a  class="nav-link sub iniciar-sesion {{setActive('cliente.index')}}" href="{{route('cliente.index')}}" title="">
                                @lang ('Cliente')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="iniciar-sesion" class="nav-link sub {{setActive('logout')}}"
                            href="#"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            @lang('Logout')
                            </a>
                        </li>
                        @break
                
                    @default
                        <li class="nav-item">Duerme un poco...</li>
                    @endswitch

                @endguest
            </ul>	
        </div>
    </div>
</nav>  
  





<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	@csrf
</form>

