@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contrata Ahora un Asesor!</h1>
        </div>
        <div class="col">
            <table>
                <th><a href="#">Volver a inicio </a></th>
                <th><a href="#">Mercado</a> </th>
                <th><a href="#">CriptoDivisas</a> </th>
                <th><a href="#">Analisis</a></th>
                <th><a href="#">Contactos</a></th>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <br><br>
            <table>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Telefono</th>
                <th>Descripcion</th>
                <th>Costo Por Hora</th>
                <th>Acciones</th>
                <tr>
                    <td>Jose</td>
                    <td>Sanchez</td>
                    <td>Sanchez</td>
                    <td>1234567890</td>
                    <td>Asesor en Inversiones</td>
                    <td>1000</td>
                    <td><button>Contratar</button></td>
                </tr>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>Smith</td>
                    <td>9876543210</td>
                    <td>Financial Advisor</td>
                    <td>1500</td>
                    <td><button>Contratar</button></td>
                </tr>
                <tr>
                    <td>Jane</td>
                    <td>Johnson</td>
                    <td>Williams</td>
                    <td>5555555555</td>
                    <td>Investment Consultant</td>
                    <td>1200</td>
                    <td><button>Contratar</button></td>
                </tr>
                <tr>
                    <td>Michael</td>
                    <td>Miller</td>
                    <td>Anderson</td>
                    <td>1111111111</td>
                    <td>Financial Planner</td>
                    <td>1800</td>
                    <td><button>Contratar</button></td>
                </tr>
                <tr>
                    <td>Sarah</td>
                    <td>Wilson</td>
                    <td>Thompson</td>
                    <td>2222222222</td>
                    <td>Investment Analyst</td>
                    <td>1400</td>
                    <td><button>Contratar</button></td>
                </tr>
                <tr>
                    <td>David</td>
                    <td>Anderson</td>
                    <td>Johnson</td>
                    <td>3333333333</td>
                    <td>Financial Advisor</td>
                    <td>1600</td>
                    <td><button>Contratar</button></td>
                </tr>
                <tr>
                    <td>Emily</td>
                    <td>Thompson</td>
                    <td>Miller</td>
                    <td>4444444444</td>
                    <td>Investment Consultant</td>
                    <td>1300</td>
                    <td><button>Contratar</button></td>
                </tr>
                <tr>
                    <td>Christopher</td>
                    <td>Williams</td>
                    <td>Smith</td>
                    <td>6666666666</td>
                    <td>Financial Planner</td>
                    <td>1700</td>
                    <td><button>Contratar</button></td>
                </tr>
                <tr>
                    <td>Amanda</td>
                    <td>Johnson</td>
                    <td>Wilson</td>
                    <td>7777777777</td>
                    <td>Investment Analyst</td>
                    <td>1100</td>
                    <td><button>Contratar</button></td>
                </tr>
                <tr>
                    <td>Matthew</td>
                    <td>Smith</td>
                    <td>Anderson</td>
                    <td>8888888888</td>
                    <td>Financial Advisor</td>
                    <td>1900</td>
                    <td><button>Contratar</button></td>
                </tr>
                <tr>
                    <td>Olivia</td>
                    <td>Miller</td>
                    <td>Thompson</td>
                    <td>9999999999</td>
                    <td>Investment Consultant</td>
                    <td>1000</td>
                    <td><button>Contratar</button></td>
                </tr>
                
            </table>
        </div>
    </div>
</div>
<style>
        table {
            width: 100%;
            border-radius: 10px;    
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        /* Agregar 2 tabulaciones de espacio a cada celda */
        th, td {
            padding-left: 40px; /* Ajusta este valor según sea necesario */
        }
</style>

@endsection