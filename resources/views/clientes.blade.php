@extends('estruct.base')
@section('content')



<h1 class="titular">
    Clientes
</h1>

<div class="section">

    <table>

        <thead>
            <tr>
                <th>
                    Nº
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Apellido
                </th>
                <th>
                    Telefono
                </th>

            </tr>
        </thead>

        <tr>
            <td>
                1
            </td>
            <td>
                Marcos
            </td>
            <td>
                Caballero
            </td>
            <td>
                264555555
            </td>
            <td>

              <a href="/infocliente">
                <button class="cv">VER</button>
              </a>

            </td>
            <td>
                <a href="editarcliente">
                <button class="ce">EDITAR</button>
                </a>
            </td>
            <td>
                <button class="cb">BORRAR</button>
            </td>
        </tr>

        <tr>
            <td>
                2
            </td>
            <td>
                Facundo
            </td>
            <td>
                Tapia
            </td>
            <td>
                264777777
            </td>
            <td>
                <button class="cv">VER</button>
            </td>
            <td>
                <button class="ce">EDITAR</button>
            </td>
            <td>
                <button class="cb">BORRAR</button>
            </td>
        </tr>




        <tr>
            <td>
                3
            </td>
            <td>
                Sofia
            </td>
            <td>
                Carrizo
            </td>
            <td>
                26499999
            </td>
           <td>
                <button class="cv">VER</button>
            </td>
            <td>
                <button class="ce">EDITAR</button>
            </td>
            <td>
                <button class="cb">BORRAR</button>
            </td>
        </tr>


        <tr>
            <td>
                4
            </td>
            <td>
                Ivan
            </td>
            <td>
                Fernandez
            </td>
            <td>
                26455555
            </td>
            <td>
                <button class="cv">VER</button>
            </td>
            <td>
                <button class="ce">EDITAR</button>
            </td>
            <td>
                <button class="cb">BORRAR</button>
            </td>
        </tr>


        <tr>
            <td>
                5
            </td>
            <td>
                Lionel
            </td>
            <td>
                Messi
            </td>
            <td>
                264222222
            </td>
            <td>
                <button class="cv">VER</button>
            </td>
            <td>
                <button class="ce">EDITAR</button>
            </td>
            <td>
                <button class="cb">BORRAR</button>
            </td>
        </tr>
    </table>


    <button class="add ce">AGREGAR</button>


</div>




@endsection