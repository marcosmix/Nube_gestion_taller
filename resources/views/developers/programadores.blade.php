@extends('estruct.base')
@section('content')
	
<section>
 				 <div>
 				 		<h1 class="text-center">Nuestros Desarrolladores</h1>
 				 </div>        
    </section>
	
    <table class="table table-hover">
 				 

 				 <thead>

 				   <tr>
            <th scope="col">N°</th>
 				     <th scope="col">Nombre</th>
             <th scope="col">Apellido</th>
 				     <th scope="col">Puesto </th>
 				     <th scope="col">Proyecto</th>
 				   </tr>

 				 </thead>

 				 </tbody>

         @foreach ($programadores as $programador)

            <tr>
          <th scope="row">{{$programador['id']}}</th>
          <td>{{$programador['name']}}</td>
          <td>{{$programador['apellido']}}</td>
          <td>$ {{$programador['puesto']}}</td>
          <td><button type="button" class="btn btn-secondary" id="btn-ver" onclick="abrir_producto('/programadorDetalle?id={{$programador['id']}}',true)"><i class="far fa-eye"></i> Ver</button></td>
          <td><button  onclick="abrir_producto('/programadorEditar?id={{$programador['id']}}',false)" type="button" class="btn btn-info"><i class="far fa-edit"></i> Editar</button></td> 
          <td><button type="button" class="btn btn-danger" onclick="Confirmar('/programador?del=',{{$programador['id']}})"><i class="far fa-times-circle"></i> Borrar</button></td>
          </tr>

        @endforeach
@endsection