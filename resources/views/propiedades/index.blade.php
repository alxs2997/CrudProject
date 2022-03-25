@extends('layouts.app')

@section('content')
<div class="row">
     <div class="col-lg-12 margin-tb">
                <h1 class="col-x2-12 col-sm-12 col-md-12 text-center">Listado de Propiedades</h1>
    </div>
    <table class="table table-bordered table-responsive-lg">
        <thead>
            <tr>
                <th class="text-center">N°</th>
                <th class="text-center" width="280px">Dueño</th>
                <th class="text-center">Tipo de Propiedad</th>
                <th class="text-center" width="250px">Estado</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Fecha de Ingreso</th>
                <th class="text-center" width="280px">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($propiedades as $propiedad)
            <tr>
                <td>{{ $propiedad->id }}</td>
                <td>{{ $propiedad->duenio }}</td>
                <td>{{ $propiedad->tipo_propiedad }}</td>
                <td>{{ $propiedad->estado }}</td>
                <td>{{ $propiedad->cantidad }}</td>
                <td>{{ $propiedad->create_at }}</td>
                <td>
                    <form action="{{ URL:: to('/propiedad'.$propiedad->id) }}" method="POST">
                        <a href="{{ url('/propiedad/'.$propiedad->id) }}" title="show">
                            <i class="fas fa-eye text-success fa-lg"></i>
                        </a>
                        <a href="{{ URL:: to('propiedad/' .$propiedad->id.'/edit') }}">
                            <i class="fas fa-edit fa-lg"></i>
                        </a>
                            @csrf
                            @method_field('DELETE')
                            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger">¿desea eliminar el registro?</i>
                        </button>
                        
                    </form>
                </td>
            </tr>

            
        @endforeach
    </tbody>
</table>
{!! $propiedades->links()!!}
@endsection