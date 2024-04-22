@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página con Historial</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<table class="container">
    <tr>
        <td colspan="8">
            <h1>HISTORIAL</h1>
        </td>
    </tr>
    <tr>
        <td class="left-column">
            <div class="welcome-message">
                <h2>Bienvenido de nuevo!</h2>
                <p>Estamos encantados de verte. Aquí puedes acceder a toda la información sobre tus inversiones.</p>
            </div>
            <div class="info">
                <h2>Información Personal:</h2>
                <div>
                    <h3>Nombre:</h3>
                    <p>IVAN ORTIZ ESTRADA</p>
                </div>
                <div>
                    <h3>No. de cuenta, tarjeta o clabe:</h3>
                    <p>1234567898945612</p>
                </div>
                <div>
                    <h3>Cantidad disponible:</h3>
                    <p>$890,000.00</p>
                </div>
                <div>
                    <h3>Ganancia:</h3>
                    <p>$90,000.00</p>
                </div>
            </div>
        </td>
        <td class="right-column" colspan="7">
            <table class="sales-table">
                <h2>Ventas</h2>
                <tr>
                    <th>Numero de venta</th>
                    <th>Fecha de venta</th>
                    <th>No. de inversión</th>
                    <th>Tipo de activo</th>
                    <th>Cantidad vendida</th>
                    <th>Precio de venta</th>
                    <th>Subtotal</th>
                    <th>Descripción</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2024-04-01</td>
                    <td>1001</td>
                    <td>Acciones</td>
                    <td>60</td>
                    <td>600</td>
                    <td>1,200</td>
                    <td>Venta de acciones de empresa X</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2024-04-02</td>
                    <td>1002</td>
                    <td>Bonos</td>
                    <td>80</td>
                    <td>800</td>
                    <td>1,600</td>
                    <td>Venta de acciones de empresa Y</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2024-04-03</td>
                    <td>1003</td>
                    <td>Fondos</td>
                    <td>10</td>
                    <td>100</td>
                    <td>2,000</td>
                    <td>Venta de acciones de empresa Z</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2024-04-04</td>
                    <td>1004</td>
                    <td>Acciones</td>
                    <td>30</td>
                    <td>300</td>
                    <td>3,000</td>
                    <td>Venta de acciones de empresa A</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>2024-04-05</td>
                    <td>1005</td>
                    <td>Fondos</td>
                    <td>56</td>
                    <td>560</td>
                    <td>5,060</td>
                    <td>Venta de acciones de empresa B</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="8">
            <div class="chart-container">
                <h2>Gráfica</h2>
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
