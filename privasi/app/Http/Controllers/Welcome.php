<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Welcome extends Controller
{
    //


	function index(){
		return " controller welcome";
	}

	public function create(){
		return view('profile');

	}

}
