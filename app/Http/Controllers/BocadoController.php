<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Bocado;

class BocadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $bocados = Bocado::orderBy('id')->get();
        $user    = Auth::user();

        session(['page' => 'home']);
        return view( 'home',compact('bocados','user') );          
    }

    public function new(Request $request)
    {
        $bocados = Bocado::orderBy('id')->get();
        $user    = Auth::user();
        session(['page' => 'createBocado']);
        return view( 'bocado',compact('bocados','user') );          
    }

    public function edit(Request $request)
    {
        $user    = Auth::user();
        $parametros = $request->route()->parameters();


        if( $request->route()->named('bocadoEdit') ) {

            // si es administrador se le permite editar
            // cualquiera en caso de ser user solo si es el
            // usuario que lo creeo
            if($user->type === 'A') {
                $bocado = Bocado::where('id',$parametros['id'])->get();
            }else{
                $bocado = Bocado::where('id',$parametros['id'])->where('user_id',$user->id)->get();
            }

            if(count($bocado) > 0) {
                $bocado=$bocado[0];
                session(['page' => 'editBocado']);
                return view( 'bocado',compact('bocado','user') );          

            } else {

                return redirect()->action('HomeController@index')->with('error','Lo sentimos pero el registro no fue encontrado');
            }
            
        }
    }

    public function edition(Request $request)
    {   
        //Procesando la edicion
        if(Auth::user()->type === 'A') {
            $result = Bocado::where('id',$request->input('idBocado'))->update(
            [
                'title'   => $request->input('title'),
                'message' => $request->input('message'),
                'confirm' => $request->input('confirm')
            ]);

        }else{
            $result = Bocado::where('id',$request->input('idBocado'))->where('user_id',Auth::user()->id)->update(
                        [
                            'title' => $request->input('title'),
                            'message' => $request->input('message')
                        ]
                );
        }

        if ($result) {          
            return redirect()->action('HomeController@index')->with('success','Registrado Actualizado Correctamente');
        }else{
            return redirect()->action('BocadoController@new')->with('error','Lo sentimos pero, Ha ocurrido un error durante la actualizacion el Registro.');
        }
        

    }

    public function add(Request $request)
    {
    	$bocado = new Bocado();
    	
    	$bocado->title 	 = $request->input('title');
    	$bocado->user_id = Auth::user()->id;
    	$bocado->message = $request->input('message');
    	$bocado->confirm = 0;

		$result=$bocado->save();

		if ($result) {			
			return redirect()->action('HomeController@index')->with('success','Registrado Correctamente');
		}else{
			return redirect()->action('BocadoController@new')->with('error','Lo sentimos pero, Ha ocurrido un error durante el Registro.');
		}

    }
}
