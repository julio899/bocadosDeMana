@extends('layouts.app')

@section('content')
<script>
	setTimeout( function(){

	    ClassicEditor
	        .create( document.querySelector( '#contentMessage' ) )
	        .catch( error => {
	            console.error( error );
	        } );
	        
	},1000 );
</script>

<div class="container">
    <div class="row">
		
        <div class="col-md-12">
          @if(session('error'))
            <div class="alert alert-danger" role="alert">
              {{ session('error') }}
            </div>
          @endif
	        <form method="post" action="{{ route('bocado') }}">
	       	@csrf
	          <div class="form-group row">
			    <h4 for="colFormLabelSm" class="col-sm-2 colortext">Titulo</h4>
			    <div class="col-sm-10">
			      <input type="text" name="title" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tilulo para el Mensaje">
			    </div>
			  </div>
			  <div class="form-group row">
			    <h4 for="contentMessage" class="col-sm-2 colortext">Mensaje</h4>
			    <div class="col-sm-10">
	              <textarea name="message" class="message" id="contentMessage"></textarea>
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