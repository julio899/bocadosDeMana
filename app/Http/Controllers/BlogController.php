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
        $bocados = Bocado::orderBy('id')->get();
        // return view( 'layouts.blog',compact('bocados'));
        session(['page' => 'blog']);          
    	return view( 'blogi',compact('bocados'));          
    }
}
