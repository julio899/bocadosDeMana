<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bocado;

class BlogController extends Controller
{
    public function __construct()
    {
        session(['page' => 'blogi']);
    }
    public function index(Request $request)
    {
        $bocados = Bocado::where('confirm',1)->orderBy('id')->get();
        // return view( 'layouts.blog',compact('bocados'));
        session(['page' => 'blog']);          
    	return view( 'blogi',compact('bocados'));          
    }
    public function individual(Request $request)
    {
        $parametros = $request->route()->parameters();
        $bocado = Bocado::where('confirm',1)->where('id',$parametros['id'])->get();
        $bocados = Bocado::orderBy('id')->get();
        if(count($bocado)>0)
        {
	        $bocado = $bocado[0];
        	session(['page' => 'blogi']);          
            return view( 'blogi',compact('bocado','bocados') );       
        }else{
        	return redirect()->action('BlogController@index')->with('error','Lo sentimos pero la URL no fue encontrada o es invalida');
        }
    }
}
