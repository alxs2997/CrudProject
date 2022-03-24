@extends('layouts.app')

@section('content')
    <div class="row">
     <div class="col-lg-12 margin-tb">
            <div clas="pull-left">
                <h1>Agregar nuevas propiedades<h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ URL::to('propiedades/') }}" title="Regresar"> <i class="fas fa-backward"></i> </a>
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
    <form action="{{ route('propiedades.store') }}" method="POST"></form>
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dueño:</strong>
                    <input type="text" name="duenio" id="duenio" class="form-control" placeholder="Nombre del dueño">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo de propiedad:</strong>
                    <input type="text" name="tipo_propiedad" id="tipo_propiedad" class="form-control" placeholder="vehiculo,casa,apartamento...">
                </div>
            </div>
        </div>