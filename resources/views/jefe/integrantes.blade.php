@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                <a class="btn btn-primary" href="{{route('jefe.index')}}">solicitudes</a>
                    <a class="btn btn-primary" href="{{route('inv')}}">Inventario</a>
            
                    <a class="btn btn-primary" href="{{route('int')}}">Integrantes</a>
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
                          <thead class="thead-dark">
                            <tr>
            
                              <th >Codigo</th>
                              <th >Responsable</th>
                              <th >Producto</th>
                              <th >Descripcion</th>
                              <th >Precio</th>
                              <th >Stock</th>
                              <th >Imagen</th>
                            </tr>
                          </thead>
                         
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
