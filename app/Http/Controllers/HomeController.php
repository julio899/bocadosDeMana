<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Bocado;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user    = Auth::user();
        
        if(Auth::user()->type === 'A') {
            $bocados = Bocado::orderBy('id')->get();
        } else{
            $bocados = Bocado::orderBy('id')->where('user_id',$user->id)->get();            
        }
        session(['page' => 'home']);
        return view( 'home',compact('bocados','user') )->with('page','home');          
    }
}
