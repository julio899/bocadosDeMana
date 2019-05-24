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
}
