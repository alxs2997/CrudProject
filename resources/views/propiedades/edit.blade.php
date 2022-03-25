@extends('layouts.app')

@section('content')
    <div class="row">
     <div class="col-lg-12 margin-tb">
            <div clas="pull-left">
                <h1 class="col-md-1 text-center">Editar Lista de Propiedades<h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-warning" href="{{ URL::to('mis_propiedades/') }}" title="Regresar"> <i class="fas fa-backward"></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problems with your input.<br></br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach    
            </ul>
        </div>
    @endif
    <form action="{{ route('mis_propiedades.update', $propiedades->id) }}" method="POST"></form>
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="form-group">
                    <strong>Dueño:</strong>
                    <input type="text" name="duenio" value="{{ $propiedades->duenio }}" id="duenio" class="form-control" placeholder="Nombre del dueño">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="form-group">
                    <strong>Tipo de propiedad:</strong>
                    <input type="text" name="tipo_propiedad" value="{{ $propiedades->tipo_propiedad }}" id="tipo_propiedad" class="form-control" placeholder="vehiculo,casa,apartamento...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="form-group">
                    <strong>Estado:</strong>
                    <input type="text" name="estado" value="{{ $propiedades->estado }}" id="estado" class="form-control" placeholder="compra,venta,alquiler...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-1">
                <div class="form-group">
                    <strong>Cantidad:</strong>
                    <input type="number" name="cantidad" value="{{ $propiedades->cantidad }}"id="cantidad" class="form-control" placeholder="1">
                </div>
            </div>
            <div class="col-x2-12 col-sm-12 col-md-1 text-center">
                <button type="submit" class="btn btn-dark">Editar</button>
            </div>
        </div>
 @endsection