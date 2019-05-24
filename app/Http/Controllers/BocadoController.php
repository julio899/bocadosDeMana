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

        return view( 'home',compact('bocados','user') );          
    }

    public function new(Request $request)
    {
        $bocados = Bocado::orderBy('id')->get();
        $user    = Auth::user();

        return view( 'bocado',compact('bocados','user') );          
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
