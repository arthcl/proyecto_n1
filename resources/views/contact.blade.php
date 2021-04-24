@extends('layouts.app')


@section('title','EMG MANTENCIONES - CONTACT')

@section('content')
<section class="container-fluid fondo-bc">
	<div class="container titulo-qs">
		<h2>CONTACTO</h2>
	</div>
 </section>
 
 
 <section class="container-fluid contacto">
	 <div class="container">
		 <div class="row">
			 <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
				 <form class="bg-white shadow rounded py-3 px-4 formulario">
					 <h3 class="titulo-form text-center">Contáctanos</h3>
					 <hr>
					 <div class="form-group">
						 <input class="form-control input" 
							 id="name" 
							 type="text" 
							 placeholder="Nombre" 
							 name="name">
					 </div>
					 
					 <div class="form-group">
						 <input class="form-control input" 
						 type="email" 
						 name="email" 
						 placeholder="Email">
					 </div>
					 
					 <div class="form-group">
						 <input class="form-control input" 
							 type="subject" 
							 name="subject" 
							 placeholder="Asunto">
					 </div>
					 
					 <div class="form-group">
						 <textarea class="form-control input" 
							 name="content"> Mensaje...
						 </textarea>
					 </div>
					 
					 <button class="b-enviar" type="submit">Enviar</button>
				 </form>
			 </div>
			 
			 
			 <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 otras-formas-contacto">
				 <h3 class="titulo-form text-center">Otras formas de contacto</h3>
				 <div class="datos">
					 <div class="row dato">
						 <div class="col-lg-2 col-md-2 col-sm-2 col-2">
							 <img src="img/email-oscuro.png" alt="email">
						 </div>
						 <div class="col-lg-10 col-md-10 col-sm-10 col-10">
							 <p class="fono">emg@emg.cl</p>
						 </div>
					 </div>
					 <div class="row dato">
						 <div class="col-lg-2 col-md-2 col-sm-2 col-2">
							 <img src="img/phone-call-oscuro.png" alt="fono">
						 </div>
						 <div class="col-lg-10 col-md-10 col-sm-10 col-10">
							 <p class="fono">+56 9 4235 4236</p>
						 </div>
					 </div>
					 <div class="row dato">
						 <div class="col-lg-2 col-md-2 col-sm-2 col-2">
							 <img src="img/instagram-oscuro.png" alt="ig">
						 </div>
						 <div class="col-lg-10 col-md-10 col-sm-10 col-10">
							 <p class="fono">@emgservicios</p>
						 </div>
					 </div>
					 <div class="row dato">
						 <div class="col-lg-2 col-md-2 col-sm-2 col-2">
							 <img src="img/facebook-oscuro.png" alt="fb">
						 </div>
						 <div class="col-lg-10 col-md-10 col-sm-10 col-10">
							 <p class="fono">/emgservicios</p>
						 </div>
					 </div>
				 </div>
			 </div>
		 </div>
	 </div>
 </section>
 
 
 
 <section class="container-fluid prefooter">
   
</section>


@endsection
