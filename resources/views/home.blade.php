@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{route('agregar.producto')}}">Agregar Producto</a>
                    <a class="btn btn-primary" href="{{route('inicio')}}">Vista Previa</a>
                </div>

                <div class="card-body">
                   
                    @if(session('info'))
                   <div class="alert alert-success">
                        {{
                        session('info')
                        }}
                   </div>
                    @endif
                    <table class="table">
                          <thead>
                            <tr>
            
                              <th >Codigo</th>
                              <th >Nombre</th>
                              <th >Descripcion</th>
                              <th >Precio</th>
                              <th >Stock</th>
                              <th >Imagen</th>
                              <th >accion</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($products as $producto)
                            <tr>
                                
                                <td>
                                    {{$producto->codigo}}
                                </td>
                                 <td>
                                    {{$producto->nombre}}
                                </td>
                                 <td>
                                    {{$producto->descripcion}}
                                </td>
                                 <td>
                                    {{$producto->precio}}
                                </td>
                                <td>
                                    {{$producto->stock}}
                                </td>
                                <td>
         <img src="{{ asset('storage').'/'.$producto->imagen}}" alt="" width="150">
                                    
                                </td>
                                <td>
        <a href="{{route('editar.producto', $producto->id)}}" class="btn btn-info btn-sm">Editar</a>

         <a href="javascript: document.getElementById('delete-{{$producto->id}}').submit()" class="btn btn-danger btn-sm">Eliminar</a>
            <form id=delete-{{$producto->id}} action="{{route('eliminar.producto', $producto->id)}}" method="POST">
                                        @method('delete')
                                        @csrf
                                    </form>
                                </td>
                                 
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
