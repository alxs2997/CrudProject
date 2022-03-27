<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$propiedad->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <form action="{{ route('mis_propiedades.destroy' ,$propiedad->id)}}" method="post">
          @csrf
          @method('DELETE')
            
      
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminación De Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h1>¡Ojo! ¿ Seguro que deseas eliminar  {{$propiedad->duenios}} ?</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
      </div>
    </div>
    </form>
  </div>
</div>