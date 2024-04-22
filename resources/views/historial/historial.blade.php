@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página con Historial</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Estilo para las columnas */
        .column {
            width: 50%; /* Establece el ancho de cada columna al 50% */
            padding: 0 10px; /* Añade un espacio alrededor de cada columna */
            box-sizing: border-box; /* Incluye el padding en el ancho de la columna */
        }
    </style>
</head>
<body>
<table class="container">
    <tr>
        <!-- Primera columna para la primera tabla -->
        <td class="column">
            <table class="sales-table">
                <h2>Rendimiento</h2>
                <tr>
                    <th>Numero de rendimiento</th>
                    <th>Tipo de activo</th>
                    <th>Fecha de actulizacion</th>
                    <th>Precio anterior</th>
                    <th>Precio actual</th>
                    <th>Precio cambio</th>
                    <th>Porcentaje de combio</th>
                    
                </tr>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Acciones</td>
                    <td>2024-04-01</td>
                    <td>200</td>
                    <td>300</td>
                    <td>700</td>
                    <td>20%</td>
                    
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bonos</td>
                    <td>2024-04-05</td>
                    <td>456</td>
                    <td>500</td>
                    <td>800</td>
                    <td>20%</td>
                    
                    
                </tr>
                <tr>
                    <td>3</td>
                    <td>Fondos</td>
                    <td>2024-04-10</td>
                    <td>100</td>
                    <td>200</td>
                    <td>500</td>
                    <td>20%</td>
                    
                </tr>
                <tr>
                    <td>4</td>
                    <td>Accion</td>
                    <td>2024-04-01</td>
                    <td>900</td>
                    <td>1300</td>
                    <td>700</td>
                    <td>20%</td>
                    
                   
                </tr>
                <tr>
                <td>5</td>
                    <td>Fondo</td>
                    <td>2024-04-01</td>
                    <td>321</td>
                    <td>785</td>
                    <td>600</td>
                    <td>20%</td>
                    
                </tr>
            </table>
        </td>
        <!-- Espacio entre las tablas -->
        <td style="width: 20px;"></td>
        <!-- Segunda columna para la segunda tabla -->
        <td class="column">
            <table class="sales-table">
                <h2>Compra de activos</h2>
                <tr>
                    <th>Numero de compra</th>
                    <th>Fecha de compra</th>
                    <th>Numero de invercion</th>
                    <th>Tipo de activo</th>
                    <th>Cantidad de compra</th>
                    <th>Precio de compra</th>
                    <th>Subtotal</th>
                    
                </tr>
                <tr>
                    <td>1</td>
                    <td>2024-04-01</td>
                    <td>1001</td>
                    <td>Acciones</td>
                    <td>60</td>
                    <td>600</td>
                    <td>1,200</td>
                   
                </tr>
                <tr>
                    <td>2</td>
                    <td>2024-04-02</td>
                    <td>1002</td>
                    <td>Bonos</td>
                    <td>80</td>
                    <td>800</td>
                    <td>1,600</td>
                   
                </tr>
                <tr>
                    <td>3</td>
                    <td>2024-04-03</td>
                    <td>1003</td>
                    <td>Fondos</td>
                    <td>10</td>
                    <td>100</td>
                    <td>2,000</td>
                 
                </tr>
                <tr>
                    <td>4</td>
                    <td>2024-04-04</td>
                    <td>1004</td>
                    <td>Acciones</td>
                    <td>30</td>
                    <td>300</td>
                    <td>3,000</td>
                    
                </tr>
                <tr>
                    <td>5</td>
                    <td>2024-04-05</td>
                    <td>1005</td>
                    <td>Fondos</td>
                    <td>56</td>
                    <td>560</td>
                    <td>5,060</td>
                    
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <!-- Primera columna para la primera gráfica -->
        <td class="column">
            <div class="chart-container">
                <!-- Contenido de la primera gráfica -->
                <div class="chart">
                    <div class="bar" style="height: 100px;"></div>
                    <div class="bar" style="height: 120px;"></div>
                    <div class="bar" style="height: 80px;"></div>
                    <div class="bar" style="height: 160px;"></div>
                    <div class="bar" style="height: 90px;"></div>
                    <div class="bar" style="height: 110px;"></div>
                </div>
            </div>
        </td>
        <!-- Espacio entre las gráficas -->
        <td style="width: 20px;"></td>
        <!-- Segunda columna para la segunda gráfica -->
        <td class="column">
            <div class="chart-container">
                <!-- Contenido de la segunda gráfica -->
                <div class="chart">
                    <div class="bar" style="height: 100px;"></div>
                    <div class="bar" style="height: 120px;"></div>
                    <div class="bar" style="height: 80px;"></div>
                    <div class="bar" style="height: 160px;"></div>
                    <div class="bar" style="height: 90px;"></div>
                    <div class="bar" style="height: 110px;"></div>
                </div>
            </div>
        </td>
    </tr>
</table>
</body>
</html>
@endsection
