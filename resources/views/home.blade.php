@extends('layouts.app')


@section('title','EMG MANTENCIONES - HOME')

@section('content') 

<section class="container-fluid">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active slide1">
            <div class="caja-slide1 container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="animate__animated animate__fadeInDown">TODOS LOS CUIDADOS PARA TU AUTO A SOLO  UNOS CLICKS</h2>
                        <p class="animate__animated animate__fadeInDown">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci. </p>
                        <a href="#" class="b-app">Contáctanos</a>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item slide2 ">
            <div class="caja-slide2 container">
                <div class="row">
                    <div class="caja1 col-lg-6 col-md-6 col-sm-6 col-xs-6 order-last">
                        <h2 class="">LO VAMOS A BUSCAR Y LO REGRESAMOS A LA PUERTA DE TU CASA</h2>
                        <P class="">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci. </P>
                        <a href="#" class="b-app">Contáctanos</a>
                    </div>
                    <div class="caja2 col-lg-6 col-md-6 col-sm-6 col-xs-6 order-first">
                        <img src="img/celular.png" alt="celular" class="img-responsive">
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item slide3">
            <div class="caja-slide3 container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-6">
                       <h4>20% DE DESCUENTO</h4>
                        <h2>EN TU SEGUNDA MANTENCION</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci. </p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-6">
                        
                    </div>
                </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
</section>

<section class="container-fluid s-qs-home">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-7 col-md-7 col-xs-12 qs-info">
               <h2 class="animate__animated animate__rotateInDownLeft">Quiénes Somos</h2>
               <div class="barra animate__animated animate__fadeInLeft"></div>
                <p><strong>EMG Ingeniería y servicios</strong>, es tu solución, somos un taller integral que nos dedicamos a entregar soluciones de reparación mecánica enfocándonos en la importancia que tienen los vehículos para nuestros clientes, ya sea en su uso particular, de trabajo o venta.</p>
                <p>Nos preocupamos que toda solución se base en la seguridad que esta presenta en el vehiculo, asi se evita que nuestros clientes mantengan algún riesgo en su recorrido.</p>
                <a href="qs.html" class="b-qs">Leer más</a>
            </div>
            <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
                <img src="img/isotipo-logo.png" alt="mecanico"  class="animate__animated animate__fadeInRight img-responsive">
            </div>
        </div>
    </div>
</section>


<section class="parallax">
    <h3 class="animate__animated animate__fadeInDown">¿BUSCAS DONDE MANTENER TU AUTOMÓVIL O FLOTA DE VEHICULOS?</h3>
</section>

<section class="paso-paso container-fluid">
    <h2 class="animate__animated animate__fadeInDown">PASO A PASO</h2>
    <div class="barra-paso-paso"></div>
    <div class="row pasos-lg container">
        <div class="pasolg col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <img src="img/pasos.png" alt="pasos" class="img-responsive img-paso-paso">
        </div>
    </div>
    
    <div class="pasos-xs container">
        <div class="row">
            <div class="pasos-mobile col-lg-12">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <img src="img/paso-uno.png" alt="paso1">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <img src="img/paso-dos.png" alt="paso2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <img src="img/paso-tres.png" alt="paso3">
                    </div>
                </div>
            </div>
        </div>
           <div class="row">
               <div class="pasos-mobile col-lg-12">
                   <div class="row">
                       <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <img src="img/paso-cuatro.png" alt="paso4">
                        </div>
                   </div>
                   <div class="row">
                       <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <img src="img/paso-cinco.png" alt="paso5">
                        </div>
                   </div>
                </div>
           </div>
    </div>
</section>
<section class="container-fluid prefooter">
    
</section>


@endsection