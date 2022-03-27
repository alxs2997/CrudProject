@estends('layout.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ $propiedades->dueño }}</h2>
            </div>
            <div class="pull-right">
                <a href="btn btn-dark" href="{{ url('/propiedades') }}" title="regresar">
                    <i class="fas fa-backward"></i>
                </a>
            </div>
        </div>
    </div>
    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dueño:</strong>
                {{ $propiedades->duenio}}
            </div>
        </div>
    </div>
    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de Propiedad:</strong>
                {{ $propiedades->tipo_propiedad}}
            </div>
        </div>
    </div>
    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado:</strong>
                {{ $propiedades->estado}}
            </div>
        </div>
    </div>
    <div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cantidad:</strong>
                {{ $propiedades->cantidad}}
            </div>
        </div>
    </div>
@endsection