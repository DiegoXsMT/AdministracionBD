@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-2" style="border: 1px solid #000;"><a href="">Volver al inicio</a></div>
            <div class="col-md-2" style="border: 1px solid #000;"><a href="">Volver al mercado</a></div>
            <div class="col-md-2" style="border: 1px solid #000;"><a href="">Análisis</a></div>
        </div>

        <div class="row" style="margin-top: 2rem">
            <div class="col-md-6">
                <div class="card" style="width: 27rem; margin-left: 5rem" >
                    <img src="images/apple.jpg" class="card-img-top rounded float-start" alt="..." style="width: 60%;margin-left: 5rem">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold; text-align: center;">Apple Inc</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <span>Acciones Adquiridas</span>
                            </div>
                            <div class="col-md-6">
                                <span style="font-weight: bold; border: 3px solid #000; padding: 0.1rem 5rem;">2</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span>Precio por acción</span>
                            </div>
                            <div class="col-md-6">
                                <span style="font-weight: bold; border: 3px solid #000; padding: 0.1rem 5rem;">2</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span>Porcentaje de crecimiento</span>
                            </div>
                            <div class="col-md-6">
                                <span style="font-weight: bold; border: 3px solid #000; padding: 0.1rem 5rem;">2</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <span>Subtotal</span>
                            </div>
                            <div class="col-md-6">
                                <span style="font-weight: bold; border: 3px solid #000; padding: 0.1rem 5rem;">2</span>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 40px;">
                            <div class="col">
                                <button type="button" class="btn btn-success" style="font-size: 20px; padding: 2px 50px;">Comprar más</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-danger" style="font-size: 20px; padding: 2px 60px;">Vender</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="images/grafico_rendimiento.jpg" width="100%" style="margin-top: 1rem;">
                <div class="row">
                    <span style="font-weight: bold; margin-left: 5px">Apple Inc</span>
                    <span style="font-weight: bold; margin-left: 5px">Apple, Inc. es una empresa tecnológica multinacional estadounidense con sede en Cupertino, California. Es la empresa de tecnología más grande del mundo por ingresos, con US$394,3 mil millones de dólares en ingresos en 2022. En marzo de 2023, Apple es la empresa más grande del mundo por capitalización de mercado.</span>
                </div>
            </div>
        </div>
    </div>
@endsection
