@extends('estruct.base')
@section('content')


<h1 class="titular">
    Clientes
</h1>

<div>
<ul class="text">
    <ol>
        <li>
            NOMBRE: MARCOS
        </li>

        <li>
        APELLIDO: CABALLERO
        </li>

        <li>
        DIRECCION: FLORESTA 21 SUR - SAN JUSTO
        </li>

        <li>
        RAZON SOCIAL: NEMO
        </li>

        <li>
        NUMERO: 264555555
        </li>
    </ol>
</ul>

</div>












<table>

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
    <td>

      <a href="/infocliente">
        <button class="cv">VER</button>
      </a>
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
    <td>
        <button class="cv">VER</button>
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
   <td>
        <button class="cv">VER</button>
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
    <td>
        <button class="cv">VER</button>
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
    <td>
        <button class="cv">VER</button>
    </td>
    
</tr>


</table>

















@endsection