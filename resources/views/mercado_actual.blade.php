@extends('layouts.app')

@section('content')

<nav class="navbar bg-body-tertiary justify-content-center">
    <div class="container-fluid">
        <div class="d-flex justify-content-center mx-auto">  
            <h2><strong>Mercado Actual</strong></h2>
        </div>
    </div>
</nav>

 
<nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-center">
    <div class="container-fluid">

        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Volver A Inicio</a>
                <a class="nav-link" href="#">Mi cuenta</a>
                <a class="nav-link" href="#">Criptodivisas</a>
                <a class="nav-link" href="#">Analisis</a>
                <a class="nav-link" href="#">Contacto</a>
            </div>
        </div>
    </div>
</nav>

 
<nav class="navbar bg-body-tertiary justify-content-center">
    <form class="container-fluid" style="max-width: 400px;">  
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Buscar empresas" aria-label="Buscar empresas" aria-describedby="basic-addon1">
        </div>
    </form>
</nav>
 
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      <div style="margin-top: 50px;">
        <a><img src="{{ asset('images/microsoft.png') }}" alt="Logo de Microsoft" width="256" height="54"><div><img src="{{ asset('images/metric1.png') }}" alt="Estadisticas" width="256" height="145"></div><br>Microsoft S. de R.L de C.V
<br>Activos corrientes y fijos.<br>
Precio por acción actual: $459.64<br>
Precio anterior: $229.82</a>
<br>
<button type="button" class="btn btn-success">Comprar</button>
<button type="button" class="btn btn-success">Ver más...</button>
<button type="button" class="btn btn-info">Comparar</button><br>
           <a><img src="{{ asset('images/apple.avif') }}" alt="Logo de Apple" width="156" height="156"><div><img src="{{ asset('images/metric1.png') }}" alt="Estadisticas" width="256" height="145"></div><br>Apple Inc. 
Activos corrientes y fijos.<br>
Precio por acción actual: $965.37 <br>
Precio anterior: $482.58<br></a>
<button type="button" class="btn btn-success">Comprar</button>
<button type="button" class="btn btn-success">Ver más...</button>
<button type="button" class="btn btn-info">Comparar</button><br>
           <a><img src="{{ asset('images/attnt.png') }}" alt="Logo de At&T" width="320" height="180"><div><img src="{{ asset('images/metric1.png') }}" alt="Estadisticas" width="256" height="145"></div><br>AT&T Comunicaciones Digitales<br>S. de R.L de C.V.
<br>Activos tangibles e intangibles.
<br>Precio por acción actual: $239.94<br>
Precio anterior: $119.97<br></a>
<button type="button" class="btn btn-success">Comprar</button>
<button type="button" class="btn btn-success">Ver más...</button>
<button type="button" class="btn btn-info">Comparar</button><br>
<br>
           <a><img src="{{ asset('images/sony.jpg') }}" alt="Logo de Sony" width="256" height="144"><div><img src="{{ asset('images/metric1.png') }}" alt="Estadisticas" width="256" height="145"></div><br>Sony de México S.A de C.V.
Activos corrientes y fijos.<br>
Precio por acción actual: $452.21<br>
Precio anterior: $226.10<br></a>
<button type="button" class="btn btn-success">Comprar</button>
<button type="button" class="btn btn-success">Ver más...</button>
<button type="button" class="btn btn-info">Comparar</button><br>
      </div>
    
</div>


@endsection
