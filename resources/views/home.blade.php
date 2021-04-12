@extends('layouts.app')


@section('title','EMG MANTENCIONES - HOME')

@section('content') 

<div class="container my-5 p-2">
    <div class="row">

        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4 w-100" 
            src="{{ asset('dist/img/towing.svg') }}" 
            alt="Responsive image"
                
            >
        </div>

        <div class="col-12 col-lg-6">
            <h1 class="dispplay-4 text-primary">
                EMG Mantenciones
            </h1>
            <p class="lead">
               EMG MANTENCIONES es una plataforma web que gestiona los requerimientos de los usuarios en
                el ámbito de mantención y reparación de sus vehículos.
                
            </p>
            <hr>
            <p class="lead">
                Los servicios mecánicos son prestados por talleres asociados, que cumplen con los estándares
                calificados en nuestras certificaciones.
               
                Además dejamos el link con nuestros talleres asociados en la ciudad de LA SERENA para conocer
                sus servicios, con una cobertura por toda la cuarta región.
            </p>
            <a  class="btn btn-lg btn-block btn-outline-primary" 
            href="http://www.cars.wobiz.cl" 
            title=""
            >Cars
            </a>
            <a  class="btn btn-lg btn-block btn-primary" 
            href="http://www.milkomantencion.com" 
            title=""
            >Milko Mantenciones
            </a>

        </div>       
    </div>
</div>
<hr>
<section>
    <div class="row">


        <div class="container col-lg-5">
            <div class="card card-widget widget-user  shadow">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-back " style="background: url('/img/monitorear.svg') 50% 50%;background-size: cover;">
                
              </div>
                <h3 class="widget-user-username text-center py-2">Monitorea tus servicios</h3>
              <div class="card-footer pt-0">
                <div class="row">
                    <div class="description-block">
                        <p class="lead">
                            Da un seguimiento a las intervenciones de tu vehículo.
                            Además de poder cotizar nuevos servicios y conocer los
                            diferentes programas de mantenimiento sugeridos.
                        </p>
                    </div>
                </div>
              </div>
            </div>
        </div>

        <div class="container col-lg-5">
            <div class="card card-widget widget-user shadow">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-back " style="background: url('/img/nopago.svg') 50% 50%;background-size: cover;">
                
              </div>
              
                <h3 class="widget-user-username text-center py-2">Plataforma gratuita</h3>
               
              <div class="card-footer pt-0">
                <div class="row">
                    <div class="description-block">
                        <p class="lead">
                            Servicio de monitoreo completamente gratuito desde que realiza el primer
                            servicio mecánico a su vehículo, para ello agende con nosotros una hora para una visita a terren o una atención en el taller.
                        </p>
                    </div>
                </div>
              </div>
            </div>
        </div>

    </div>
</section>




@endsection