<!-- Modal -->
  <div class="modal fade" id="editar{{$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Recuerdo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <form method="POST" action="/recuerdo/{{$data->id}}/confirm">
                @csrf
                {!!method_field('PUT')!!}
                <div class="mb-3">
                    <label class="form-label">Titulo:</label>
                    <input type="text" class="form-control" name="txtTitulo" value="{{$data->titulo}}">
                    @if($errors->first('txtTitulo'))
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first('txtTitulo')}}
                      </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label">Recuerdo:</label> 
                    <textarea class="form-control" style="height: 100px" name="txtRecuerdo" >{{$data->recuerdo}}</textarea>
                    @if($errors->first('txtRecuerdo'))
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first('txtRecuerdo')}}
                      </div>
                    @endif
                </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-info">Guardar cambios</button>
        </form>
        </div>
      </div>
    </div>
  </div>

  <!--Modal eliminar-->
  <div class="modal fade" id="eliminar{{$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Recuerdo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <form method="POST" action="/recuerdo/{{$data->id}}/delete">
                @csrf
                {!!method_field('DELETE')!!}
                <div class="card mb-2">
                  <h5 class="card-header">{{$data->fecha}}</h5>
                  <div class="card-body">
                    <div class="border p-1 mb-3">
                      <h5 class="card-title fw-bold">{{$data->titulo}}</h5>
                      <p class="card-text">{{$data->recuerdo}}</p>
                    </div>
                  </div>
              </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </div>
      </div>
    </div>
  </div>