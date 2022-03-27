@extends('layouts.app')

@section('content')

<div class="row">
     <div class="col-lg-12 margin-tb">
                <h1 class="col-x2-12 col-sm-12 col-md-12 text-center">Listado de Propiedades</h1>
    </div>
                <div class="text-center my-1">

                    <a href="{{ URL::to('mis_propiedades/create') }}" class="btn btn-warning">Añadir Propiedad <i class="fas fa-forward"></i></a>
                </div>
    <table class="table table-bordered table-responsive-lg my-2">
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
                <td>{{ $propiedad->duenios }}</td>
                <td>{{ $propiedad->tipo_propiedad }}</td>
                <td>{{ $propiedad->estado }}</td>
                <td>{{ $propiedad->cantidad }}</td>
                <td>{{ $propiedad->created_at }}</td>
                <td>
                    <form action="{{ URL:: to('/mis_propiedades'.$propiedad->id) }}" method="POST">
                        <a href="{{ url('/mis_propiedades/'.$propiedad->id) }}" title="show">
                            <i class="fas fa-eye text-success fa-lg"></i>
                        </a>
                        <a href="{{ URL:: to('mis_propiedades/' .$propiedad->id.'/edit') }}">
                            <i class="fas fa-edit fa-lg"></i>
                        </a>
                            @csrf
                            @method('DELETE')
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$propiedad->id}}">
                                 Eliminar
                            </button>
                        
                    </form>
                </td>
            </tr>
            @include('propiedades.delete')
            
        @endforeach
    </tbody>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</table>
{!! $propiedades->links() !!}
@endsection