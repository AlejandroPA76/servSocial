@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        {{--se tiene que colocar un enctype porque vamos a colocar una imagen--}}
<form action="{{route('almacenar.producto')}}" method="POST" enctype="multipart/form-data">
  @csrf

  <div class="form-group">
    <label for="">Codigo:</label>
    <input type="text" class="form-control" name="codigo">
  </div>

  <div class="form-group">
   
    <input type="hidden" class="form-control" name="responsable" value="{{auth()->user()->name}}">
  </div>

  <div class="form-group">
    <label for="">Nombre del producto:</label>
    <input type="text" class="form-control" name="nombre">
  </div>


  <div class="form-group">
    <label for="">Descripcion:</label>
   <textarea class="form-control"rows="3" name="descripcion"></textarea>
  </div>
  

  <div class="form-group">
    <label for="">Precio:</label>
    <input type="number" class="form-control" name="precio" step=".01">
  </div>

  <div class="form-group">
    <label for="">stock</label>
    <input type="number" class="form-control" name="stock">
  </div>

  <div class="form-group">
    <label for="">Imagen:</label>
    <input type="file" class="form-control-file" name="imagen">
  </div>

  <button class="btn btn-primary" type="submit">Agregar</button>
  <a href="{{route('home')}}" class="btn btn-danger">Cancelar</a>
</form>
</div>
</div>
</div>
@endsection
