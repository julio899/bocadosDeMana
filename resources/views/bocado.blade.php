@extends('layouts.app')

@section('content')
<script src="{{ asset('js/editorConfig.js') }}"></script>
<script>
setTimeout(()=>{
	document.getElementById('btnConfirm').addEventListener('click',(evt)=>{
		console.log(evt); 
		if(evt.target.className == 'btn btn-warning' )
		{ 
			evt.target.className = 'btn btn-success';
			evt.target.children[0].className = 'fas fa-bookmark';
			document.getElementById('confirmBocado').value=1;
		}else{
			evt.target.className = 'btn btn-warning';
			evt.target.children[0].className = 'far fa-bookmark';
			document.getElementById('confirmBocado').value=0;
		}
	});
},1000);
	
</script>
<div class="container">
    <div class="row">
		
        <div class="col-md-12">
          @if(session('error'))
            <div class="alert alert-danger" role="alert">
              {{ session('error') }}
            </div>
          @endif

			@if(session('page')=='editBocado')
	        	<form method="post" action="{{ route('bocadoEdit') }}" autocomplete="off">
	        		<input type="hidden" name="idBocado" value="{{$bocado->id}}">
	        		<input type="hidden" name="confirm" id="confirmBocado" value="{{$bocado->confirm}}">
	        @else
	        	<form method="post" action="{{ route('bocado') }}" autocomplete="off">
	        @endif
	       	@csrf
	          <div class="form-group row">
			    <h4 for="controlTitle" class="col-sm-2 colortext">Titulo</h4>
			    <div class="col-sm-10">
			      @if(session('page')=='editBocado')
			      	<input type="text" name="title" value="{{$bocado->title}}" class="form-control form-control-sm in-title" id="controlTitle" placeholder="Tilulo para el mensaje" data-toggle="tooltip" data-placement="bottom" title="Escriba la Descripcion para este articulo">
			      @else
			      	<input type="text" name="title" class="form-control form-control-sm in-title" id="controlTitle" placeholder="Tilulo para el mensaje" data-toggle="tooltip" data-placement="bottom" title="Escriba la Descripcion para este articulo">
			      @endif
			    </div>
			  </div>
			  <div class="form-group row">
			  	<div class="col-sm-2">			  		
			    	<h4 for="contentMessage" class="colortext">Mensaje</h4>
					@if($user->type==='A' && session('page')=='editBocado')

						<label class="colortext" style="margin-top: 20px;">Opciones</label>
			    		<div class="btn-group btn-group-vertical btn-block" role="group">
						  @if($bocado->confirm === 1)
						  	<button type="button" class="btn btn-success" id="btnConfirm"><i class="fas fa-bookmark"></i> Confirmado</button>

						  @else
						  	<button type="button" class="btn btn-warning" id="btnConfirm"><i class="far fa-bookmark"></i> Confirmar</button>
						  @endif
						</div>
					@endif
			  	</div>
			    <div class="col-sm-10">
			      @if(session('page')=='editBocado')
			      	<textarea name="message" class="message" id="contentMessage">{{$bocado->message}}</textarea>
				      	@if($user->type==='A')
				      	<p>Enviado Por: {{ $editor->name }}  <em>Email:{{ $editor->email }}</em> </p>
				      	@endif
			      @else
	              	<textarea name="message" class="message" id="contentMessage"></textarea>
			      @endif
			    </div>
			  </div>

			  <div class="form-group row">
			    <label class="col-sm-2 col-form-label col-form-label-lg"></label>
			    <div class="col-sm-10">
	              	<button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Mensaje</button>
			    </div>
			  </div>
	      </form>
        </div>

	</div>
</div>
@endsection