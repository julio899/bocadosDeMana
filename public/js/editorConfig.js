setTimeout( function(){
	    ClassicEditor
	        .create( document.querySelector( '#contentMessage' )
/*
	        	, {
	        		toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'alignment'],
			        heading: {
			            options: [
			                { model: 'paragraph', title: 'Parrafo', class: 'ck-heading_paragraph' },
			                { model: 'heading1', view: 'h1', title: 'Encabezado 1', class: 'ck-heading_heading1' },
			                { model: 'heading2', view: 'h2', title: 'Encabezado 2', class: 'ck-heading_heading2' }
			            ]
			        }
			    }
*/
	         ).then(editor => {
	         	console.log(editor.plugins);

	         }).catch( error => {
	            console.error( error );
	        } );	        
},1000 );