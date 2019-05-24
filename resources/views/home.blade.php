@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
              
              <a href="nuevoBocado" class="list-group-item list-group-item-action active">
                Crear Nuevo Articulo <i class="fas fa-feather-alt"></i>
              </a>

              @if ( $user->type === 'A')
                  <a href="#" class="list-group-item list-group-item-action">
                    Enviar Recordatorio
                    <i class="fas fa-paper-plane"></i>
                  </a>

                  <a href="#" class="list-group-item list-group-item-action disabled">
                    Difusion en Redes Sociaes 
                  </a>
              @endif;

            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Bocados </div>

                <div class="card-body">
                    <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Creacion</th>
                        <th scope="col">Actualizaci&oacute;n</th>
                        <th scope="col">Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach( $bocados as $b)
                      <tr>
                        <th scope="row">{{$b->id}}</th>
                        <td>{{$b->title}} 
                          @if($b->confirm === 1)
                          <i class="fas fa-bookmark"></i>
                          @endif
                          @if($b->confirm === 0)
                          <i class="far fa-bookmark"></i>
                          @endif
                        </td>
                        <td>{{$b->created_at}}</td>
                        <td>{{$b->updated_at}}</td>
                        <td>
                          <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                          <a href="#" class="btn btn-success"><i class="fas fa-check-square"></i></a>
                          <a href="" class="btn btn-danger"><i class="fa fa-eye-slash"></i></a>

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
