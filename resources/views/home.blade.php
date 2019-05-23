@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
              
              <a href="#" class="list-group-item list-group-item-action active">
                Crear Nuevo Articulo
              </a>

              @if ( $user->type === 'A')
                  <a href="#" class="list-group-item list-group-item-action">
                    Enviar Recordatorio
                  </a>

                  <a href="#" class="list-group-item list-group-item-action disabled">
                    Difusion en Redes Sociaes 
                  </a>
              @endif;

            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
