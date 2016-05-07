<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class loginPageController extends Controller
{
   function userCheck(){
		// send the username and password to core
		// core response you with an answer
		$userID = 11;
		if($userID != -1){		//user is in the system
			session(['userID' => $userID]);
			//dd(session('userID'));
			return view('home');
		}
		else{		//redirect with an error message
			return view("login");
		}
	}
}
