<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \Firebase\JWT\JWT;
class FirebaseController extends Controller{

	function login(Request $request){
		$jwt = JWT::encode($request, 'bocados');
		return array(
			'auth'=>[
	        	'tk' => $jwt,
			]
		);
	}

}