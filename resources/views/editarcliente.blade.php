@extends('estruct.base')
@section('content')


<h1 class="titular">
    Clientes
</h1>
<ul>
    <ol>
        <li>
            NOMBRE: MARCOS
        </li>
        <hr>
        <li>
            APELLIDO: CABALLERO
        </li>
        <hr>
        <li>
            DIRECCION: FLORESTA 21 SUR - SAN JUSTO
        </li>
        <hr>
        <li>
            RAZON SOCIAL: NEMO
        </li>
        <hr>
        <li>
            NUMERO: 264555555
        </li>
        <hr>
    </ol>
</ul>


<table class="tablee">

    <thead>
        <tr>
            <th>
                Nº
            </th>
            <th>
                Proyecto
            </th>
            <th>
                Fecha
            </th>
            <th>
                Adeuda
            </th>

        </tr>
    </thead>

    <tr>
        <td>
            1
        </td>
        <td>
            Proyecto 1
        </td>
        <td>
            28/05/2021
        </td>
        <td>
            $0
        </td>


    </tr>

    <tr>
        <td>
            2
        </td>
        <td>
            Bicentenario-Deportes
        </td>
        <td>
            30/05/2021
        </td>
        <td>
            $90000
        </td>


    </tr>




    <tr>
        <td>
            3
        </td>
        <td>
            Sistema Bancario
        </td>
        <td>
            15/06/2021
        </td>
        <td>
            $300000
        </td>


    </tr>


    <tr>
        <td>
            4
        </td>
        <td>
            Proyecto 4
        </td>
        <td>
            03/03/2021
        </td>
        <td>
            $0
        </td>


    </tr>


    <tr>
        <td>
            5
        </td>
        <td>
            Sistema de Insumos Informaticos
        </td>
        <td>
            16/08/2021
        </td>
        <td>
            $190000
        </td>


    </tr>

</table>

<div class="botons">
    <tr>
        
            <td>
                <a href="/infocliente">
                    <button class="cg">GUARDAR</button>
                </a>
            </td>
            <td>

                <a href="/infocliente">
                    <button class="cc">CANCELAR</button>
                </a>
            </td>

        
    </tr>

</div>

















@endsection