@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="row justify-content-end">
            <div class="col-md-2 border"><a href="">Volver al inicio</a></div>
            <div class="col-md-2 border"><a href="">Mercado</a></div>
            <div class="col-md-2 border"><a href="">Asesorias</a></div>
            <div class="col-md-2 border"><a href="/rendimiento">Analisis</a></div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <span style="font-size: 32px; font-weight: bold; margin-top: 1rem" >!Hola Diego!</span>
        </div>
        <div class="row">
            <span style="font-size: 32px; font-weight: bold; margin-top: 1rem" > Tu saldo actual es de: </span>
        </div>
        <div class="row">
            <span style="font-size: 32px; font-weight: bold; margin-left: 5rem" > $5450.00 </span>
        </div>

    </div>

    <div class="">
        <div class="row ">
            <div class="col-md-3 ">
                <div class="row " style="margin-top: 7rem">
                    <div class="col-md-4">Capital invertido $4500</div>
                    <div class="col-md-4">Rendimiento $1500</div>
                    <div class="col-md-4">Tasa anual fija %15</div>
                </div>
                <div class="row " style="margin-top: 9rem">
                    <button type="button" class="btn btn-success">Ingresa Dinero a tu cuenta</button>
                </div>
                <div class="row " style="margin-top: 3rem;margin-left: 3rem">
                    <span> ¿Tienes algun problema? <a href="" style="margin-left: 1rem">Contactanos</a></span>
                </div>
            </div>


            <div class="col-md-4 ">
                <div class="row ">
                    <span class="row justify-content-center" style="font-weight: bold"> Tu actividad</span>
                </div>
                <div class="row">
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week-fill" viewBox="0 0 16 16" style="width: 70%; height: 70%; margin-top: 4rem; margin-left:60px">
                            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
                        </svg>
                    </div>
                </div>

            </div>




            <div class="col-md-5 ">
                <div class="row ">
                    <span class="row justify-content-center" style="font-weight: bold" > Tus movimientos del ultimo mes</span>
                </div>

                <div class="row ">
                    <div class="row ">
                        <img src="images/telcel.jpg" class="rounded float-start" alt="..." style="width: 12rem; margin-left: 1rem">
                        <img src="images/grafica.png" class="rounded float-end" alt="..." style="width: 12rem; margin-left: 7rem">
                    </div>
                    <div class="row  d-flex justify-content-center">
                        <div class="col text-center">
                            <span> Exclusivo y pensado para ti. Experiencias Telcel. ¿Sabías que puedes ganar premios increíbles por ser Telcel?</span>
                        </div>
                        <div class="col text-center">
                            <span style="margin-left: 3rem">Rendimiento grafico</span>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="row ">
                        <img src="images/apple.jpg" class="rounded float-start" alt="..." style="width: 12rem; margin-left: 1rem">
                        <img src="images/grafica.png" class="rounded float-end" alt="..." style="width: 12rem; margin-left: 7rem">
                    </div>
                    <div class="row  d-flex justify-content-center">
                        <div class="col text-center">
                            <span> Descubre el innovador mundo de Apple: iPhone, iPad, Apple Watch, Mac, Apple TV, accesorios, entretenimiento y soporte técnico.</span>
                        </div>
                        <div class="col text-center">
                            <span style="margin-left: 3rem">Rendimiento grafico</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
@endsection
