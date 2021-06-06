@extends('estruct.base')
@section('content')


<h2 class="titular">
    Editar
</h2>

<section class="formu table">


    <input type="text" class="controls" name="nombre" placeholder="Nombre">

    <input type="apellido" class="controls" name="apellido" placeholder="Apellido">

    <input type="text" class="controls" name="nombre" placeholder="Direccion">

    <input type="text" class="controls" name="nombre" placeholder="Razon Social">

    <input type="text" class="controls" name="email" placeholder="Email">


    <!--
   <button class="boton">Guardar Cambios
   <input type="submit"  value="" placeholder="Guardar Cambios">
  </button> -->
</section>



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



    <tr>
        <td>

            <button class="cg">GUARDAR</button>



            <button class="cc">CANCELAR</button>
        </td>
    </tr>







</table>












































@endsection