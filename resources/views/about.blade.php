@extends('layouts.app')

@section('title','EMG MANTENCIONES - Quienes Somos')

@section('content')
	<div class="container-fluid my-5 p-2">
    <div class="row">


    	<div class="col-12 col-lg-6 align-self-center">
            <h1 class="dispplay-4 text-primary">
                Quienes Somos
            </h1>
            <p class="lead text-secondary ">
                HOLA, somos EMG MANTENCIONES, formamos parte del proyecto SOLUCIONES INFORMATICAS INTEGRALES creada por el área de proyectos de EMG INGENIERIA Y SERVICIOS SPA, que tiene por finalidad apoyar a las empresas en la gestión de activos de manera moderna y personalizada, enfocando proyectos con un alto impacto en el desarrollo de estas empresas aumentando los resultados positivos de sus operaciones.
            </p>

        </div>

        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4 w-100 img-circle py-0" 
            src="{{ asset('img/equipo.png') }}" 
            alt="Responsive image"
                
            >
        </div>
     </div>

     <!---//////////// Equipo ///////////////////// -->
     
	<example-component></example-component>
    
</div>

@endsection